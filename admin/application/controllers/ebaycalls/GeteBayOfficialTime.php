<?php

/**

 * sources

 */

require_once 'setincludepath.php';

require_once 'GeteBayOfficialTimeRequestType.php';

require_once 'EbatNs_Environment.php';



/**

 * sample_GeteBayOfficialTime

 * 

 * Sample call for GeteBayOfficalTime

 * 

 * @package ebatns

 * @subpackage samples_trading

 * @author johann 

 * @copyright Copyright (c) 2008

 * @version $Id: sample_GeteBayOfficialTime.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $

 * @access public 

 */

class GeteBayOfficialTime extends EbatNs_Environment

{


public function get_ebay_official_time()
{
   return $this->dispatchCall(array());
}
   /**

     * sample_GeteBayOfficialTime::dispatchCall()

     * 

     * Dispatch the call

     *

     * @param array $params array of parameters for the eBay API call

     * 

     * @return boolean success

     */

    public function dispatchCall ($params)

    {

        $req = new GeteBayOfficialTimeRequestType();

		

        $res = $this->proxy->GeteBayOfficialTime($req);
        return ($res);
        

    }

}





?>

