<?php
class Welcome extends Controller {

    function Welcome()
    {
    	parent::Controller();	
    }
    
    function index()
    {
    	$this->load->view('welcome_message');
    }
   
   /**
     * Bases do desenvolvimento do ta
    */
    function tests()
    {
           include '../application/t/testes.php';
    }               

}

/* End of file welcome.php */
/* Location: ../application/controllers/welcome.php */
