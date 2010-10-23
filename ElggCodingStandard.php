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
			dirname(__FILE__) . '/Sniffs/WhiteSpace/DisallowSpaceIndentSniff.php',
			'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
			'PEAR/Sniffs/Commenting/ClassCommentSniff.php',
			'PEAR/Sniffs/ControlStructures/ControlSignatureSniff.php',
			'Generic/Sniffs/ControlStructures/InlineControlStructureSniff.php',
			dirname(__FILE__) . '/Sniffs/NamingConventions/ValidFunctionNameSniff.php',
			'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
			dirname(__FILE__) . '/Sniffs/Functions/FunctionDeclarationArgumentSpacingSniff.php',
			'PEAR/Sniffs/Functions/FunctionCallArgumentSpacingSniff.php',
			'PEAR/Sniffs/Commenting/InlineCommentSniff.php',
			dirname(__FILE__) . '/Sniffs/Files/LineLengthSniff.php',
			'Zend/Sniffs/Files/ClosingTagSniff.php',
		);

	}
}

