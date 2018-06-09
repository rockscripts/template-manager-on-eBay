<?php
//error_reporting(true);
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetSessionIDRequestType.php';
require_once 'EbatNs_Environment.php';
/**

 * sample_GetItem
 * 
 * Sample call for GetItem
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetItem.php,v 1.90 2011-12-29 14:03:00 michaelcoslar Exp $
 * @access public 
 */
class GetSessionID extends EbatNs_Environment
{
   public function get_session_id($runName)
    {
       return $this->dispatchCall($runName);
    }

   /**
     * sample_GetItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($runName)
    {
        $req = new GetSessionIDRequestType();
        $req->setRuName($runName);
        $res = $this->proxy->GetSessionID($req);
        if ($this->testValid($res))
        return ($res);
        else 
            return (false);
    }

}


?>

