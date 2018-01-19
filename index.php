<?php 

//Carrega as dependencias 
require_once("vendor/autoload.php");

//Classes dentro de vendor necessarias nesse arquivo
use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

//Gerenciamento de Rotas
$app = new Slim();

$app->config('debug', true);

//Quando chamarem via GET essa rota executa a seguinte função
$app->get('/', function() {

	//Cria uma nova pagina com header
    $page = new Page();

    //Carrega conteudo dentro de um arquivo html
    $page->setTpl("index");

    //__Destruct finaliza inserindo o footer
});


//Rota de administrador
$app->get('/admin', function() {

	//Cria uma nova pagina com header
    $page = new PageAdmin();

    //Carrega conteudo dentro de um arquivo html
    $page->setTpl("index");

    //__Destruct finaliza inserindo o footer
});


$app->get('/admin/login', function(){

    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl("login");
});


//Coloca a função acima em pratica
$app->run();

 ?>