<?php if(! defined('BASEPATH')) exit();

class Browsercache
{
    private $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    public function cacheFor($minutes)
    {
        $this->ci->output->cache($minutes);
        $this->ci->output->set_header('Expires: ' . gmdate('D, d M Y H:i:s', time() + ($minutes * 60)) . ' GMT');
    }
    
    public function dontCache()
    {
        $this->ci->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->ci->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
        $this->ci->output->set_header("Pragma: no-cache"); 
    }
}
