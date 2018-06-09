<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Seller account status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerAccountStatusCodeType.html
 *
 * @property string Current
 * @property string PastDue
 * @property string OnHold
 * @property string CustomCode
 */
class SellerAccountStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Current = 'Current';
	const CodeType_PastDue = 'PastDue';
	const CodeType_OnHold = 'OnHold';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerAccountStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerAccountStatusCodeType = new SellerAccountStatusCodeType();

?>
