<?php
class Taonde extends Controller {

        function index($coisa)
        {
		$this->load->view('taonde');
        }

        function restaurantes($coisa)
        {
                echo "$coisa. Que fome! Onde acho isto?";
                return "comer ".$coisa;
        }

        function taqui($coisa)
        {
                echo "$coisa. Ta onde? Sei la!";
                return "buscar ".$coisa;
        }


}
?>
