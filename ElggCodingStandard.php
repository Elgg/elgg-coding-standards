<?php
/**
 * Elgg Coding Standard.
 * http://trac.elgg.org/browser/elgg/trunk/CODING.txt
 *
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
	throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

class PHP_CodeSniffer_Standards_Elgg_ElggCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{

	public function getIncludedSniffs()
	{
		return array(
			'Generic/Sniffs/Files/LineEndingsSniff.php',
			'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
			'PEAR/Sniffs/ControlStructures/ControlSignatureSniff.php',
			'Generic/Sniffs/ControlStructures/InlineControlStructureSniff.php',
			'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
			'Generic/Sniffs/Functions/OpeningFunctionBraceKernighanRitchieSniff.php',
			'PEAR/Sniffs/Functions/FunctionCallArgumentSpacingSniff.php',
			'PEAR/Sniffs/Commenting/InlineCommentSniff.php',
			'Zend/Sniffs/Files/ClosingTagSniff.php',
			'Squiz/Sniffs/WhiteSpace/OperatorSpacingSniff.php',
		);

	}
}

