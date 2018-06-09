<?php

/**

 * sources

 */

require_once 'setincludepath.php';

require_once 'ReviseItemRequestType.php';

require_once 'EbatNs_Environment.php';



/**

 * sample_ReviseItem

 * 

 * Sample call for ReviseItem

 * 

 * @package ebatns

 * @subpackage samples_trading

 * @author johann 

 * @copyright Copyright (c) 2008

 * @version $Id: sample_ReviseItem.php,v 1.90 2011-12-29 14:03:02 michaelcoslar Exp $

 * @access public

 */

class ReviseItem extends EbatNs_Environment

{

    /**
     * sample_ReviseItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */

    public function revise_item ($params)

    {
        $req = new ReviseItemRequestType();        
        $item = new ItemType();
        $item->setItemID($params['ItemID']);
        $item->setDescription($params['Description']);
        $req->setItem($item);		
        $res = $this->proxy->ReviseItem($req);
       /* echo "<pre>";
        print_r($res);*/
          return ($res);
      /*  if ($this->testValid($res))
        {
            return ($res);
        }
        else 
        {
            return (false);
        }    */
}
}
?>