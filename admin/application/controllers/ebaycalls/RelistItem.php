<?php

/**

 * sources

 */

require_once 'setincludepath.php';

require_once 'RelistItemRequestType.php';

require_once 'EbatNs_Environment.php';
 


/**

 * sample_RelistItem

 * 

 * Sample call for RelistItem

 * 

 * @package ebatns

 * @subpackage samples_trading

 * @author johann 

 * @copyright Copyright (c) 2008

 * @version $Id: sample_RelistItem.php,v 1.90 2011-12-29 14:03:02 michaelcoslar Exp $

 * @access public

 */

class RelistItem extends EbatNs_Environment

{
   /**
     * sample_RelistItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */

    public function revise_item ($item_id)
    {
        $req = new RelistItemRequestType();		
        $item = new ItemType();
        $item->setItemID($item_id);
        $req->setItem($item);        
        $res = $this->proxy->RelistItem($req);
        if ($this->testValid($res))
        {
            return ($res);
        }
        else 
        {
            return (false);
        }
    }
}
?>