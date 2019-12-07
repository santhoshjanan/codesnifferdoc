<?php 

namespace CSDHelper;

class CodeSniffDoc
{

    public static function GetCodeSnifferPage($errorcode = NULL){
		if(!$errorcode){
			return "#";
		}

		preg_match('/[0-9]_[0-9]_[0-9]/', $errorcode, $matches, PREG_OFFSET_CAPTURE);
		
		$standard = explode('.', $errorcode)[0];

		$returnpage = "http://squizlabs.github.io/HTML_CodeSniffer/Standards/Section508/";			

		if(strstr($standard, 'Section508')){
			$returnpage = "http://squizlabs.github.io/HTML_CodeSniffer/Standards/Section508/";
		}elseif (strstr($standard, 'WCAG2')) {
			$returnpage = "http://squizlabs.github.io/HTML_CodeSniffer/Standards/WCAG2/".$matches[0][0];
		}

		return $returnpage;
	}
}
