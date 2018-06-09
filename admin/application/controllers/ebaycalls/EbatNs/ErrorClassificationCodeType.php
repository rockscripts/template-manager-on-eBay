<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ErrorClassificationCodeType.html
 *
 * @property string RequestError
 * @property string SystemError
 * @property string CustomCode
 */
class ErrorClassificationCodeType extends EbatNs_FacetType
{
	const CodeType_RequestError = 'RequestError';
	const CodeType_SystemError = 'SystemError';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ErrorClassificationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ErrorClassificationCodeType = new ErrorClassificationCodeType();

?>