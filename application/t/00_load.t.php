<?php
/**
 * \file t/00_load.t.php
 *
 * realiza testes iniciais do ta
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
 * \page main Funcionalidades do ta 
 *
 * ta é um website na iternet que permite buscas em fontes abstratas de dados.
 *
 * A implementacao inicial usa um mashup com o google maps mas deve sempre
 * haver uma forma clara e simples de aplicar ganchos para outras fontes 
 * de dados a critério do usuário.
 *
 * \li Abertura (Welcome)
 * 
 * A interface de abertura usa um mashup do panoramio para apresentar o
 * fundo de tela com imagens aleatórias do Brasil. A idéia é criar um
 * set de imagens e carregar na abertura. Durante as buscas a tag de busca
 * no panoramio deve ser o texto digitado pelo usuario.
 *
 * \li Admin
 *
 * A interface Admin apresenta o Backend da aplicação, permitindo o 
 * gerenciamento e edição dos dados de:
 *   -# usuários, 
 *      - Admin::usuarios()
 *      - Admin::usuarios($id)
 *   -# pontos turísticos, 
 *      - Admin::turisticos()
 *      - Admin::turisticos($id)
 *   -# hotéis, 
 *      - Admin::hoteis()
 *      - Admin::hoteis($id)
 *   -# restaurantes, 
 *      - Admin::restaurantes()
 *      - Admin::restaurantes($id)
 *   -# patrocinadores e 
 *      - Admin::patrocinadores()
 *      - Admin::patrocinadores($id)
 *   -# parceiros
 *      - Admin::parceiros()
 *      - Admin::parceiros($id)
 
 * \li Taonde
 *
 * A interface Taonde realiza as buscas.
 * 
 * Taonde comporta 2 metodos: 
 *   -# restaurantes, que busca restaurantes
 *   
 *    Taonde::restaurantes($busca)
 *
 *   -# taqui, que busca hotéis e pontos turísticos
 *    
 *    Taonde::taqui($busca)
 *
 * Estes métodos devem ser chamados em ajax e carregados nas camadas
 * específicas. 
 */

/**
 * \page testes0 Testes básicos
 *
 * <a href='/ta/?/welcome/tests'>Realizar os testes</a>
 *
 * <a href='/ta/docs/00__load_8t_8php.html'>Ver os testes</a>
 */

   /**
    * \page testes0
    * \section sec1 Pode carregar o controle taonde
    *
    * Carregamos o taonde com \c new \c Taonde();
    * 
    * A melhor forma de garantirmos a presença do objeto do tipo
    * Controller será testar a presença do router
    * testando a existencia de 
    *
    * \c $taonde->router->method;
    *
    * Taonde comporta 2 metodos: 
    *   -# restaurantes, que busca restaurantes 
    *   -# taqui, que busca hotéis e pontos turísticos
    */
    require '../application/controllers/taonde.php';
    $taonde = new Taonde();
    $test = $taonde->router->method;
    $expected_result = 'tests';
    $test_name = 'Pode usar o controle /taonde';
    $this->tests[] = $this->unit->run($test, 
                  $expected_result, 
                  $test_name);


    /**
    * \page testes0
    * \section sec2 Pode usar o metodo restaurantes
    *
    * Taonde::restaurantes()
    *
    * A melhor forma de provar a chamada do metodo
    * é testar o retorno com uma chamada de resposta conhecida
    * Chamado-se o metodo com a chave \c 'Brasil' devera retornar \c 'comer \c Brasil'
    */
    $test = $taonde->restaurantes('Brasil');
    $expected_result = 'comer Brasil';
    $test_name = 'Pode usar o metodo /taonde/restaurantes';
    $this->tests[] = $this->unit->run($test, 
                          $expected_result, 
                          $test_name);
 
   /**
    * \page testes0
    *  \section sec3 Pode usar o metodo taqui
    * 
    * A melhor forma de provar a chamada do metodo
    * é testar o retorno com uma chamada de resposta conhecida
    * Chamado-se o metodo com a chave 'Brasil' devera retornar \c 'buscar \c Brasil'
    */
    $test = $taonde->taqui('Brasil');
    $expected_result = 'buscar Brasil';
    $test_name = 'Pode usar o metodo /taonde/taqui';
    $this->tests[] = $this->unit->run($test, 
                          $expected_result, 
                          $test_name);
 
   /**
    * \page testes0
    *  \section sec4 Pode carregar o controle admin
    * 
    * Carregamos o admin com \c new \c Admin();
    * 
    * A melhor forma de garantirmos a presença do objeto do tipo
    * Controller será testar a presença do router
    * testando a existencia de 
    *
    * \c $admin->router->method;
    *
    * Admin comporta 6 métodos
    *   -# usuários, 
    *   -# pontos turísticos, 
    *   -# hotéis, 
    *   -# restaurantes, 
    *   -# patrocinadores e 
    *   -# parceiros
    */
    require '../application/controllers/admin.php';
    $admin = new Admin();
    $test = $admin->router->method;
    $expected_result = 'tests';
    $test_name = 'Pode usar o controle /admin';
    $this->tests[] = $this->unit->run($test, 
                          $expected_result, 
                          $test_name);
 
?>
