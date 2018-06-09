<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/QuestionTypeCodeType.html
 *
 * @property string General
 * @property string Shipping
 * @property string Payment
 * @property string MultipleItemShipping
 * @property string CustomizedSubject
 * @property string None
 * @property string CustomCode
 */
class QuestionTypeCodeType extends EbatNs_FacetType
{
	const CodeType_General = 'General';
	const CodeType_Shipping = 'Shipping';
	const CodeType_Payment = 'Payment';
	const CodeType_MultipleItemShipping = 'MultipleItemShipping';
	const CodeType_CustomizedSubject = 'CustomizedSubject';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('QuestionTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_QuestionTypeCodeType = new QuestionTypeCodeType();

?>
