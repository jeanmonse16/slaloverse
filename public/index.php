<?php
define('BASE_URL','localhost/public/');
#Este es el archivo que controlara todas las entradas de la aplicación que modulos deben ejecutarse de acuerdo a lo que usuario quiere

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

require_once '../vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'slaloverse',
    'username'  => 'root',
    'password'  => 'twentyonepilots14.',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/', '../view/index.php');
$map->get('addJobs', '/jobs/add', '../view/tickets.php');


$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if(!$route){
    echo"No route $route";
} else{
    require $route->handler;
}

#con diactoros usamos su clase para obtener la ruta actual de la aplicación, a traves de la variable request 
var_dump($request->getUri()->getPath());

require_once "../view/index.php";

$users = Capsule::table('artistas')->where('votos', '>', 30)->get();

echo ($users[4]->nombre);