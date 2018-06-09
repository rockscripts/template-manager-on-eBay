<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the Minimum Reserve Price feature. If the field is present, the feature 
 * applies to the category. The field is returned as an empty element (i.e., a 
 * boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MinimumReservePriceDefinitionType.html
 *
 */
class MinimumReservePriceDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MinimumReservePriceDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
