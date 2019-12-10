<?php

session_start();

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Register;
use App\Models\Auth;

require_once '../../vendor/autoload.php';

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



if($_SESSION["email"]){
    header("Location: ../../tickets");
}else{
    header("Location: ../../login");
}