<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the current Checkout status for an order line item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CheckoutStatusCodeType.html
 *
 * @property string CheckoutComplete
 * @property string CheckoutIncomplete
 * @property string BuyerRequestsTotal
 * @property string SellerResponded
 * @property string CustomCode
 */
class CheckoutStatusCodeType extends EbatNs_FacetType
{
	const CodeType_CheckoutComplete = 'CheckoutComplete';
	const CodeType_CheckoutIncomplete = 'CheckoutIncomplete';
	const CodeType_BuyerRequestsTotal = 'BuyerRequestsTotal';
	const CodeType_SellerResponded = 'SellerResponded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CheckoutStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CheckoutStatusCodeType = new CheckoutStatusCodeType();

?>