<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Set of available layouts for items listed in an eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreItemListLayoutCodeType.html
 *
 * @property string ListView
 * @property string GalleryView
 * @property string CustomCode
 */
class StoreItemListLayoutCodeType extends EbatNs_FacetType
{
	const CodeType_ListView = 'ListView';
	const CodeType_GalleryView = 'GalleryView';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreItemListLayoutCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreItemListLayoutCodeType = new StoreItemListLayoutCodeType();

?>
