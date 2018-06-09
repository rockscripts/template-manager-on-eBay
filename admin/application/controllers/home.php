<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CSV extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
     public function __construct() 

     {

        parent::__construct();
        validate_user();
        validate_application();
        $this->load->model('Csv_model');
        $this->load->model('Configuration_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('html');
        $this->is_saved_basic_details = false;

       

    }
public function index()
{
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "CSV Data to Listing Design";
       $data["widgettitle"] = "2) Select File And Generate Templates";
        // This can be autoloaded //
       $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
       $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
       $data["passed_to_view"] = $this->breadcrumbs->get(); 
        
        /*get files*/
        $data['csv_files_directory'] =  $this->Configuration_model->get_configuration_value('csv-files-path');
        $this->template->load('csv/index', $data);     
}
public function new_template()
{
   $data["username"] = $this->session->userdata( 'username' );
   $data["user_id"] = $this->session->userdata( 'user_id' );
   $data["page_title"] = "CSV Data to Listing Design";
   $data["widgettitle"] = "2) Select File And Generate Templates";
        // This can be autoloaded //
   $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
   $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );        
        // Variable passed into the view
   $data["passed_to_view"] = $this->breadcrumbs->get();         
        /*get files*/        
   $this->template->load('home/new_template', $data);     
}
          public function new_tpl()
	{
	   $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "CSV Data to Listing Design";
        $data["widgettitle"] = "2) Select File And Generate Templates";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get(); 
        
        /*get files*/
         $html_code_new =  $this->input->post('html_code_new'); 
         $this->Csv_model->new_tpl($html_code_new); 
         $this->template->load('home/new_template', $data);     
	}
        public function see_files()
        {
       $data["username"] = $this->session->userdata( 'username' );
       $data["user_id"] = $this->session->userdata( 'user_id' );
       $data["page_title"] = "CSV Data to Listing Design";
        $data["widgettitle"] = "2) Select File And Generate Templates";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get(); 
        
        /*get files*/
        
         $this->template->load('home/index', $data); 
        }
         public function generate_template()
        {
            
        $data["username"] = $this->session->userdata( 'username' );
        $data["user_id"] = $this->session->userdata( 'user_id' );
        $data["page_title"] = "CSV Data to Listing Design";
        $data["widgettitle"] = "2) Select File And Generate Templates";
        // This can be autoloaded //
        $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
        $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
        $data["passed_to_view"] = $this->breadcrumbs->get(); 
        $file =  $this->input->post('file_name'); 
        
        $dir    = $this->Configuration_model->get_configuration_value('csv-files-path');
        $csv_file = $dir.$file;
        
        //die;
        /*Create database table with csv information including headers title,*/
        $this->create_table_csv($csv_file);
        //print_r($csv_file);
         $this->db->query("LOAD DATA LOCAL INFILE '$csv_file' REPLACE INTO TABLE csv_importing FIELDS TERMINATED BY ';' OPTIONALLY  ENCLOSED BY ''  LINES TERMINATED BY '\n'");
        /*insert column called id and set primary key and autoincrement to  update description record*/
        $this->create_column_autonumeric_csv_table(); 
        /*conver csv file data to array*/
        $csvArr = $this->csv_to_array(file_get_contents($csv_file));
         $arrayData = $this->Csv_model->get_csv_data_from_dynamiic_table();
         print_r($arrayData);
        /* foreach($arrayData as $column_name=>$field_value):
                foreach($field_value as $key=>$value):
                if($key!="id") 
                {
                  //  echo "$key<>".$this->get_column_name_description();
                    if($key==$this->get_column_name_description())
                    {
                      //  echo $key."====".$this->get_column_name_description();
                      $csv_output .= 'DEscription_Test*; ';   
                    }                        
                    else
                        $csv_output .= $value.'; ';
                }                 
               endforeach;     
           $csv_output .= "\n<br><br><br>"; 
            endforeach; 
            echo $csv_output;
            die;
        echo "<pre>";
        print_r($csvArr);*/
        /*Localize field anme where is *Description value*/
        $column_description = $this->get_column_name_description();
        
       for($i=0;$i<sizeof($csvArr);$i++)
       {
           
           $title =  $csvArr[$i]['*Title'];
           $description =  $csvArr[$i]['*Description'];
          // echo $description;
           if(isset($csvArr[$i]['PicURL']))
               $pic1=  $csvArr[$i]['PicURL'];
           if(isset($csvArr[$i]['PicURL1']))
               $pic1=  $csvArr[$i]['PicURL1'];
           if(isset($csvArr[$i]['PicURL2']))
               $pic2=  $csvArr[$i]['PicURL2'];
           if(isset($csvArr[$i]['PicURL3']))
               $pic3=  $csvArr[$i]['PicURL3'];
           if(isset($csvArr[$i]['PicURL4']))
               $pic4=  $csvArr[$i]['PicURL4'];
           if(isset($csvArr[$i]['PicURL5']))
               $pic5=  $csvArr[$i]['PicURL5'];
           /*Get Template from db*/
           $templateArray = $this->Csv_model->get_template(5);  
           $html_template ="";
           foreach($templateArray as $template)
           {
               $html_template = $template->html_code;
               $id_listing_design = $template->id;
           }
           /*******/
           /*Replace Pic URLs*/
           $final_template = str_replace("[LISTING_TITLE]", $title,$html_template);
           $final_template = str_replace("[LISTING_DESCRIPTION]", $description,$final_template); 
           if(isset($csvArr[$i]['PicURL1']))
           $final_template = str_replace("[PIC_URL_1]", $pic1,$final_template); 
           if(isset($csvArr[$i]['PicURL2']))
           $final_template = str_replace("[PIC_URL_2]", $pic2,$final_template);  
           if(isset($csvArr[$i]['PicURL3']))
           $final_template = str_replace("[PIC_URL_3]", $pic3,$final_template); 
           if(isset($csvArr[$i]['PicURL4']))
           $final_template = str_replace("[PIC_URL_4]", $pic4,$final_template);  
           if(isset($csvArr[$i]['PicURL5']))
           $final_template = str_replace("[PIC_URL_5]", $pic5,$final_template); 
                       
            /*********/
           $this->Csv_model->insert_listing($id_listing_design, $final_template,$title); 
           
           /*Set id for csv_importing table created dynamiclly*/
           $id = $i+2;
           $this->Csv_model->set_template_to_description_field($id,$column_description,$final_template);
       }
       /*Prepare to generate  CSV file*/
        $data['download_file'] =  $this->db_table_to_downloaded_csv_file($file);
       /***********************************/
       /*generate tempaltes to show in software*/
       $data['array_templates_generated'] = $this->Csv_model->get_templates_generated($id_listing_design);
       $data['id_listing_design'] = $id_listing_design;    
       /***************************************************/   
        $data['csv_files_directory'] =  $this->Configuration_model->get_configuration_value('csv-files-path');
       $this->template->load('home/load_templates', $data); 
        }
        function db_table_to_downloaded_csv_file($file)
        {            
            $filename = "_".date("Y-m-d_H-i",time()).$file;
            /*do connection to database and use function to generate csv*/
            $CI =& get_instance();
            $link =  mysqli_connect($CI->db->hostname, $CI->db->username, $CI->db->password);
             mysqli_select_db("alex_designmanager", $link); 
            $dir    = $this->Configuration_model->get_configuration_value('generated-path');
            $this->query_to_csv($link,"select * from csv_importing" ,$dir.$filename."",false,false);
            return $download_file = base_url()."server/php/files/generated/".$filename; 
         }
          function query_to_csv($db_conn, $query, $filename, $attachment = false, $headers = true) 
                {
       
                if($attachment) 
                    {
                    // send response headers to the browser
                    header( 'Content-Type: text/csv' );
                    header( 'Content-Disposition: attachment;filename='.$filename);
                    $fp = fopen('php://output', 'w');
                    }
                else 
                    $fp = fopen($filename, 'w');

                $result =  mysqli_query($query, $db_conn) or die(  mysqli_error( $db_conn ) );       
                if($headers) 
                    {
                    // output header row (if at least one row exists)
                    $row =  mysqli_fetch_assoc($result);
                    if($row) 
                        {
                        fputcsv($fp, array_keys($row));
                        // reset pointer back to beginning
                         mysqli_data_seek($result, 0);
                    }
                   }

                  while($row =  mysqli_fetch_assoc($result)) 
                      {         
                        fputcsv($fp, $row);
                      }

                fclose($fp);
    }

        function create_table_csv($file)
        {
            $this->drop_csv_table();
          $handle = fopen($file, "r");  
          // Read first (headers) record only)
          $data = fgetcsv($handle, 1000, ";");
          $sql= 'CREATE TABLE csv_importing (';
          for($i=0;$i<count($data); $i++) 
          {
            $sql .= "col_$i".' TEXT(10000), ';
          }
          $sql = substr($sql,0,strlen($sql)-2);
          $sql .= ')'; 
          $this->db->query($sql);
        }
        function drop_csv_table()
        {
            $this->db->query("drop table csv_importing");
        }
        function get_column_name_description()
        {
            $result = $this->db->list_fields('csv_importing');
            $field_name_configuration = $this->Configuration_model->get_configuration_value('template-field-name');
            foreach($result as $field_name)
            {
               /*check if *Description exist in current  field*/
               $num_rows = $this->Csv_model->check_if_exist_description_value($field_name,$field_name_configuration);
               if($num_rows>0)
               {
                   return $field_name;
               }
             } 
        
        }
        //
// Convert csv file to associative array:
//
function view_code()
{
     $data["username"] = $this->session->userdata( 'username' );
     $data["user_id"] = $this->session->userdata( 'user_id' );
     $data["page_title"] = "CSV Data to Listing Design";
     $data["widgettitle"] = "2) Select File And Generate Templates";
        // This can be autoloaded //
     $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
     $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
    $data["passed_to_view"] = $this->breadcrumbs->get(); 
    $template_generated_id=  $this->input->post('template_generated_id');
    echo $template_generated_id;
    $data["array_template_generated"]  = $this->Csv_model->get_template_generated($template_generated_id);  
    $this->template->load('home/view_code', $data);  
}
function csv_to_array($input, $delimiter=';')
{
    $header = null;
    $data = array();
    $csvData = str_getcsv($input, "\n");

    foreach($csvData as $csvLine){
        if(is_null($header)) $header = explode($delimiter, $csvLine);
        else{

            $items = explode($delimiter, $csvLine);

            for($n = 0, $m = count($header); $n < $m; $n++){
                $prepareData[$header[$n]] = $items[$n];
            }

            $data[] = $prepareData;
        }
    }

    return $data;
}
function create_column_autonumeric_csv_table()
{
    $this->db->query("alter table csv_importing add column id INT (255) AUTO_INCREMENT PRIMARY KEY");     
}
function clean_all_templates_generated()
{
     $data["username"] = $this->session->userdata( 'username' );
     $data["user_id"] = $this->session->userdata( 'user_id' );
     $data["page_title"] = "CSV Data to Listing Design";
     $data["widgettitle"] = "2) Select File And Generate Templates";
        // This can be autoloaded //
     $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
     $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
         
        // Variable passed into the view
    $data["passed_to_view"] = $this->breadcrumbs->get(); 
    $id_listing_design =  $this->input->post('id_listing_design'); 
    $this->Csv_model->delete_all_listings_generated($id_listing_design);  
    $data['array_templates_generated'] = $this->Csv_model->get_templates_generated($id_listing_design);
    $data['id_listing_design'] = $id_listing_design;
        /*
        echo "<pre>";
        print_r($csvArr);*/
       $this->template->load('home/load_templates', $data); 
}
function delete_item()
{
   $data["username"] = $this->session->userdata( 'username' );
     $data["user_id"] = $this->session->userdata( 'user_id' );
     $data["page_title"] = "CSV Data to Listing Design";
        // This can be autoloaded //
     $this->load->library('breadcrumbs');        // Assigning specific titles & links to specific parts of the path //
        // as an array //
     $this->breadcrumbs->page = array('link'=> base_url().'index.php' ,'title' => 'Home' );
        
        // Variable passed into the view
    $data["passed_to_view"] = $this->breadcrumbs->get(); 
    $template_generated_id =  $this->input->post('template_generated_id');
     $this->Csv_model->delete_listing_generated($template_generated_id);  
    $data['id_listing_design'] = $this->input->post('id_listing_design'); 
    $data['array_templates_generated'] = $this->Csv_model->get_templates_generated( $data['id_listing_design'] );
 
   
    $this->template->load('home/load_templates', $data);    
}
}  

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */