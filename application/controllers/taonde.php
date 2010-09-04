<?php
/**
 * controllers/taonde.php
 *
 * PHP version 5.2.6
 *
 * @category PHP
 * @package  ta
 * @author   Ricardo Filipo <ricardo.filipo@mitologica.com.br>
 * @license  GPL Affero
 * @version  0.01_01 27/08/2010
 * @link     http://www.kobkob.com.br/ta/
 */

/**
 * Cotrolador para buscas 
 *
 * Implementa o controlador de buscas
*/ 
class Taonde extends Controller {
 
   /** 
    * Controlador default
    * 
    * A string $coisa é recebida pela url na forma
    *    /taonde/coisa_a_buscar
    *
    * @param $coisa string a buscar
    */ 
    function index($coisa)
    {
    	$this->load->view('taonde');
    }

   /**
    * Controlador para a busca em restaurantes
    */ 
    function restaurantes($coisa)
    {
            echo "$coisa. Que fome! Onde acho isto?";
            return "comer ".$coisa;
    }

   /**
    * Controlador para busca geral por palavra-chave
    */ 
    function taqui($coisa)
    {
            echo "$coisa. Ta onde? Sei la!";
            return "buscar ".$coisa;
    }

}
?>
