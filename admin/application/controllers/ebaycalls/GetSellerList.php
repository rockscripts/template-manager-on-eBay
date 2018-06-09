<?php
//error_reporting(true);
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetSellerListRequestType.php';
require_once 'EbatNs_Environment.php';
/**
 * sample_GetSellerList
 * 
 * Sample call for GetSellerList
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetSellerList.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $
 * @access public
 */

class GetSellerList extends EbatNs_Environment
{
   public function get_list($today)
    {
       $res = $this->dispatchCall(array(),$today);
       return $res;
    }
    public function import_seller_list()
    {
        //get_list();
    }
   /**
     * sample_GetSellerList::dispatchCall()
     * Dispatch the call
     * @param array $params array of parameters for the eBay API call
     * @return boolean success
     */
    public function dispatchCall ($params,$today)
    {
        $req = new GetSellerListRequestType();
        //$req->setStartTimeTo('2008-05-26 00:00:00');
        $today = date("Y-m-d H:i:s",strtotime("+8 weeks"));        
        $daysego = date("Y-m-d H:i:s", strtotime("-8 weeks"));
       /* echo "today ".$today."<br>";
        echo "days ego ".$daysego."<br>";
        die("****");*/
        $req->setEndTimeFrom($daysego);
        $req->setEndTimeTo($today);			
        $res = $this->proxy->GetSellerList($req);
        if ($this->testValid($res))
         return ($res);      
        else 
            return (false);            
   } 
}

?>