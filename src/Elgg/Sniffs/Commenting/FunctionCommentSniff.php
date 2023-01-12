<?php

namespace Elgg\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;

class FunctionCommentSniff extends \PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FunctionCommentSniff {
	
	/**
	 * {@inheritdoc}
	 */
	protected function processReturn(File $phpcsFile, $stackPtr, $commentStart) {
		if ($this->checkInheritdoc($phpcsFile, $stackPtr, $commentStart) === true) {
			return;
		}
		
		parent::processReturn($phpcsFile, $stackPtr, $commentStart);
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function processThrows(File $phpcsFile, $stackPtr, $commentStart) {
		if ($this->checkInheritdoc($phpcsFile, $stackPtr, $commentStart) === true) {
			return;
		}
		
		parent::processThrows($phpcsFile, $stackPtr, $commentStart);
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function processParams(File $phpcsFile, $stackPtr, $commentStart) {
		if ($this->checkInheritdoc($phpcsFile, $stackPtr, $commentStart) === true) {
			return;
		}
		
		parent::processParams($phpcsFile, $stackPtr, $commentStart);
	}
	
	/**
	 * Determines whether the comment contains an inheritdoc comment
	 *
	 * @param File $phpcsFile    The file being scanned.
	 * @param int  $stackPtr     The position of the current token
	 *                           in the stack passed in $tokens.
	 * @param int  $commentStart The position in the stack where the comment started.
	 *
	 * @return boolean TRUE if the docblock contains {@inheritdoc} (case-insensitive).
	 * @see \PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FunctionCommentSniff
	 */
	protected function checkInheritdoc(File $phpcsFile, $stackPtr, $commentStart) {
		$tokens = $phpcsFile->getTokens();
		
		$allowedTokens = [
			T_DOC_COMMENT_OPEN_TAG,
			T_DOC_COMMENT_WHITESPACE,
			T_DOC_COMMENT_STAR,
		];
		
		$commentContent = '';
		for ($i = $commentStart; $i <= $tokens[$commentStart]['comment_closer']; $i++) {
			if (in_array($tokens[$i]['code'], $allowedTokens) === false) {
				$commentContent .= $tokens[$i]['content'];
			}
		}
		
		return str_contains(strtolower($commentContent), '{@inheritdoc}');
	}
}
