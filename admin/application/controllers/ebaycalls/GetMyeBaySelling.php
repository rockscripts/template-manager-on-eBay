<?php
@session_start();
error_reporting(true);
/**

 * sources

 */
  
require_once 'setincludepath.php';
require_once 'PaginationType.php';
require_once 'ItemListCustomizationType.php';
require_once 'GetMyeBaySellingRequestType.php';
require_once 'EbatNs_Environment.php';



/**

 * sample_GetMyeBaySelling

 * 

 * Sample call for GetMyeBaySelling

 * 

 * @package ebatns

 * @subpackage samples_trading

 * @author johann 

 * @copyright Copyright (c) 2008

 * @version $Id: sample_GetMyeBaySelling.php,v 1.90 2011-12-29 14:03:00 michaelcoslar Exp $

 * @access public 

 */

class GetMyeBaySelling extends EbatNs_Environment

{

   /**
     * GetMyeBaySelling::get_active_items()
     Get active listings
     * @return object items
     */
    public function get_active_items ()
    {
        $req = new GetMyeBaySellingRequestType();
        $pag = new PaginationType();
        $pag->setEntriesPerPage(200);
        $items_collection = array();
        $pages_info = $this->get_active_items_total_pages();
        $pages = $pages_info["total_pages"];
        $total_number_of_entries = $pages_info["total_number_of_entries"];
        $index=0;
// for ( $page = 55; $page <= 57; $page++ ) //no imported
       // unset($_SESSION["pages_to_import"]);
        if($pages > 3):
            if(!isset($_SESSION["pages_to_import"])):
                $_SESSION["pages_to_import"] = $pages;
                $_SESSION["current_page_to_import"] = 1;
            endif;
            $max_import = 1;
            $index_import = 1;
            for ( $page = $_SESSION["current_page_to_import"]; $page <= $_SESSION["pages_to_import"] ; $page++ ) 
                { 
               
                        if($index_import <= $max_import): 
                            $pag->setPageNumber( $page );
                            $ActiveList = new ItemListCustomizationType();
                            $ActiveList->setInclude( true );
                            $ActiveList->setPagination( $pag );
                            $req->setActiveList( $ActiveList );
                            $res = $this->proxy->GetMyeBaySelling($req);    
                             for($i=0;$i<sizeof($res->ActiveList->ItemArray);$i++):             
                              $items_collection[$index]["ItemID"] = $res->ActiveList->ItemArray[$i]->ItemID;
                              $index ++;
                             endfor;  
                             $index_import++;
                             $_SESSION["current_page_to_import"]++;
                             else:
                                 break;
                        endif;                         
                  }
                  else:
                       for ( $page = 1; $page <= $pages; $page++ ) 
       { 
                $pag->setPageNumber( $page );
                $ActiveList = new ItemListCustomizationType();
                $ActiveList->setInclude( true );
                $ActiveList->setPagination( $pag );
                $req->setActiveList( $ActiveList );
                $res = $this->proxy->GetMyeBaySelling($req);                    
                 for($i=0;$i<sizeof($res->ActiveList->ItemArray);$i++):             
                  $items_collection[$index]["ItemID"] = $res->ActiveList->ItemArray[$i]->ItemID;
                  $index ++;
                 endfor;         
         }
        endif;
     /*unset($_SESSION["pages_to_import"]);
               echo "<pre>";
         print_r($items_collection);
         echo sizeof($items_collection);
         die("####");*/
        if (sizeof($items_collection)>0)
        {
            //$this->dumpObject($res);
            return ($items_collection);
        }
        else 
        {
            return (false);
        }
    } 
     public function get_active_items_total_pages()
     {
         $req = new GetMyeBaySellingRequestType();
         $pag = new PaginationType();
         $pag->setPageNumber(1);
         $pag->setEntriesPerPage(200);
         $req->ActiveList = new ItemListCustomizationType();
         $req->ActiveList->setPagination($pag);
         $req->setActiveList(true); 
         $res = $this->proxy->GetMyeBaySelling($req);
         $total_pages = $res->ActiveList->PaginationResult->TotalNumberOfPages;
         $total_number_of_entries = $res->ActiveList->PaginationResult->TotalNumberOfEntries;
         $array_return = array();
         $array_return["total_pages"] = $total_pages;
         $array_return["total_number_of_entries"] = $total_number_of_entries;
         return $array_return;
     }
      public function get_active_items_paginated ($items_per_page=200, $start_page, $total_pages)
    {
        $req = new GetMyeBaySellingRequestType();	
        $req->setActiveList(true);
        $res = $this->proxy->GetMyeBaySelling($req);
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
    /**
     * GetMyeBaySelling::get_sold_items()
     * Get sold listings
     * @return object items
     */
    public function get_sold_items ()
    {
        $req = new GetMyeBaySellingRequestType();
        $pag = new PaginationType();
        $pag->setEntriesPerPage(200);	
        $pag->setPageNumber( 1 );
        $SoldList = new ItemListCustomizationType();
        $SoldList->setInclude( true );
        $SoldList->setPagination( $pag );
        $req->setSoldList($SoldList);
        $res = $this->proxy->GetMyeBaySelling($req);
        if ($this->testValid($res))
        {
            return ($res);
        }
        else 
        {
            return (false);
        }
    } 
     /**
     * GetMyeBaySelling::get_unsold_items()
     * Get unsold listings
     * @return object items
     */
    public function get_unsold_items ()
    {
        $req = new GetMyeBaySellingRequestType();	
        $req->setUnsoldList(true);
        $res = $this->proxy->GetMyeBaySelling($req);
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
    /**
     * GetMyeBaySelling::get_deleted_items()
     * Get deleted listings
     * @return object items
     */
    public function get_deleted_from_unsold_items ()
    {
        $req = new GetMyeBaySellingRequestType();	
        $req->setDeletedFromSoldList(true);
        $req->setDeletedFromUnsoldList(true);
        $res = $this->proxy->GetMyeBaySelling($req);
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
    /**
     * GetMyeBaySelling::get_deleted_items()
     * Get deleted listings
     * @return object items
     */
    public function get_deleted_from_sold_items ()
    {
        $req = new GetMyeBaySellingRequestType();	
        $req->setDeletedFromSoldList(true);
        $res = $this->proxy->GetMyeBaySelling($req);
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