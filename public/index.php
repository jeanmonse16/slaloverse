<?php

#Este es el archivo que controlara todas las entradas de la aplicación que modulos deben ejecutarse de acuerdo a lo que usuario quiere

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


use Illuminate\Database\Capsule\Manager as Capsule;

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

require_once "../view/index.php";

$users = Capsule::table('artistas')->where('votos', '>', 30)->get();

echo ($users[4]->nombre);