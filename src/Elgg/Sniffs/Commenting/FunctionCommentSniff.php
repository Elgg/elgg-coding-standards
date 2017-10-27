<?php

class Elgg_Sniffs_Commenting_FunctionCommentSniff extends \PEAR_Sniffs_Commenting_FunctionCommentSniff {

	public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {
		$tokens = $phpcsFile->getTokens();
		foreach ($tokens as $index => $token) {
			if ($token['content'] == '{@inheritdoc}') {
				return;
			}
		}
		return parent::process($phpcsFile, $stackPtr);
	}

}
