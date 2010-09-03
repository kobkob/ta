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

        function tests()
	{
                $this->load->library('unit_test');
                $this->output->enable_profiler(TRUE);
                $tests = array();

   /**
    *  Pode carregar os controles taonde e admin
    */
    require ('system/application/controllers/taonde.php');
    $taonde = new Taonde();
    $test = $taonde->router->method;
    $expected_result = 'tests';
    $test_name = 'Pode usar o controle /taonde';
    $tests[] = $this->unit->run($test, 
                          $expected_result, 
                          $test_name);
    /**
    *  Pode usar o metodo restaurantes
    */
    $test = $taonde->restaurantes('Brasil');
    $expected_result = 'comer Brasil';
    $test_name = 'Pode usar o metodo /taonde/restaurantes';
    $tests[] = $this->unit->run($test, 
                          $expected_result, 
                          $test_name);
    /**
    *  Pode usar o metodo taqui
    */
    $test = $taonde->taqui('Brasil');
    $expected_result = 'buscar Brasil';
    $test_name = 'Pode usar o metodo /taonde/taqui';
    $tests[] = $this->unit->run($test, 
                          $expected_result, 
                          $test_name);
    

                $data['tests'] = $tests;
		$this->load->view('tests_page', $data);


}

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
