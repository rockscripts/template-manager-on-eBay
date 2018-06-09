<?php

/**

 * sources

 */

require_once 'setincludepath.php';

require_once 'EndItemRequestType.php';

require_once 'EbatNs_Environment.php';



/**
 * EndItem
 * 
 * Sample call for EndItem
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_EndItem.php,v 1.90 2011-12-29 14:02:59 michaelcoslar Exp $
 * @access public 
 */

class EndItem extends EbatNs_Environment

{
   /**
     * sample_EndItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */


    public function end_item ($item_id)
    {
        $req = new EndItemRequestType();
        $req->setItemID($item_id);
        $req->setEndingReason("LostOrBroken");		
        $res = $this->proxy->EndItem($req);
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