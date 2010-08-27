<?php
/**
 * controllers/taonde.php
 *
 * autores: 
 * - Ricardo Filipo <ricardo.filipo@mitologica.com.br>
 * 27/08/2010
 * 
 * PHP version 5.2.6
 *
 * @category PHP
 * @package  ta
 * @author   Ricardo Filipo <ricardo.filipo@mitologica.com.br>
 * @license  GPL Affero
 * @version  0.01_01
 * @link     http://www.kobkob.com.br/ta/
 *
 */

/**
 * class Taonde
 * implementa controlador de buscas pela string $coisa
 */ 
class Taonde extends Controller {
       /**
        * function index
        * controlador default
        */ 
        function index($coisa)
        {
		$this->load->view('taonde');
        }

       /**
        * function restaurantes
        * controlador para a busca em restaurantes
        */ 
        function restaurantes($coisa)
        {
                echo "$coisa. Que fome! Onde acho isto?";
                return "comer ".$coisa;
        }

       /**
        * function taqui
        * controlador para busca geral por palavra-chave
        */ 
        function taqui($coisa)
        {
                echo "$coisa. Ta onde? Sei la!";
                return "buscar ".$coisa;
        }


}
?>
