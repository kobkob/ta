<?php
/**
 * controllers/admin.php
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
 * Cotrolador para 
 *
 * Implementa o controlador de buscas
*/ 
class Admin extends Controller {
 
   /** 
    * Controlador default
    * 
    * Apresenta a tela de entrada do Backend
    */ 
    function index()
    {
    	$this->load->view('adminHome');
    }

   /**
    * Controlador para gerenciamento de restaurantes
    */ 
    function restaurantes()
    {
    	$this->load->view('adminRestaurantes');
    }

   /**
    * Controlador para gerenciamento de hoteis
    */ 
    function hoteis()
    {
    	$this->load->view('adminHoteis');
    }

   /**
    * Controlador para gerenciamento de pontos turisticos
    */ 
    function tur()
    {
    	$this->load->view('adminTur');
    }

}
?>
