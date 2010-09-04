<?php

    $this->load->library('unit_test');
    $this->output->enable_profiler(TRUE);
    $this->tests = array();
   
    // suite de testes:
    $d = dir("../application/t");
    while (false !== ($entry = $d->read())) {
        if (substr($entry, -6, 6) ==  '.t.php' &&
            $entry != '.' &&
            $entry != '..') {
            include $entry;
        }
    }           
    $d->close();

    $data['tests'] = $this->tests;
    $this->load->view('tests_page', $data);
                            
?>               
                 
