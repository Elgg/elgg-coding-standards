<?php

namespace Elgg\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;

class FunctionCommentSniff extends \PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FunctionCommentSniff {

	public function process(File $phpcsFile, $stackPtr) {
		$tokens = $phpcsFile->getTokens();
		foreach ($tokens as $index => $token) {
			if ($token['content'] == '{@inheritdoc}') {
				return;
			} elseif ($token['content'] == '{@inheritDoc}') {
				return;
			}
		}
		return parent::process($phpcsFile, $stackPtr);
	}

}
