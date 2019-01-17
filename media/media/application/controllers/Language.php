<?php
class Language extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        /*$this->load->library('session');*/
    }
 
   public function change_lang()
   {
        $lang =  $this->input->post('lang');
        $url  =  $this->input->post('current_url');

        $lang = ($lang!= "") ? $lang : "en";
        $this->session->set_userdata('lang', $lang);

		redirect($url,'refresh');
    }
}
