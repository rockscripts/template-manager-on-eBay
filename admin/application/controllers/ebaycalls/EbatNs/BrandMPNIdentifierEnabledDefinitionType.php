<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the Brand/Manufacturer Part Number feature, and whether 
 * thisfeature is enabled at the site level. An empty BrandMPNIdentifierEnabled 
 * field isreturned under the FeatureDefinitions container in GetCategoryFeatures 
 * if the featureis applicable to the site and if BrandMPNIdentifierEnabled is 
 * passed in as aFeatureID (or if no FeatureID is passed in, hence all features are 
 * returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BrandMPNIdentifierEnabledDefinitionType.html
 *
 */
class BrandMPNIdentifierEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BrandMPNIdentifierEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>