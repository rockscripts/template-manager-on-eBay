<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetStoreCustomPageRequestType.php';
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

class GetStoreCustomPage extends EbatNs_Environment
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
public function get_store_pages ()
    {
        $req = new GetStoreCustomPageRequestType();        
        $res = $this->proxy->GetStoreCustomPage($req);
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
    public function get_store_page($ebay_page_id)
    {
        $req = new GetStoreCustomPageRequestType();    
        $req->setPageID($ebay_page_id);
        $res = $this->proxy->GetStoreCustomPage($req);
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