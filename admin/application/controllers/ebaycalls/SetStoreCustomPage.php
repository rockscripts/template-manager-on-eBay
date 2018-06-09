<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'SetStoreCustomPageRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * GetStoreCustomPage
 * 
 * Sample call for GetStoreCustomPage
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetStoreCustomPage.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $
 * @access public
 */

class SetStoreCustomPage extends EbatNs_Environment
{
   /**
     * GetStoreCustomPage::get_store_pages()
     * 
     * get_store_pages
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */

    public function save_store_page($name,$content)
    {
        $req = new SetStoreCustomPageRequestType();
        $store_page = new StoreCustomPageType();
        $req->setCustomPage($store_page);
        $store_page_object  =$req->getCustomPage();
       echo  is_object($store_page_object)."***";
        $store_page_object->setName($name);
        $store_page_object->setContent($content);
        $res = $this->proxy->SetStoreCustomPage($req);
        if ($this->testValid($res))
        {
            //$this->dumpObject($res);
            return ($res);
        }
        else 
        {
            return (false);
        }
    }
}
?>