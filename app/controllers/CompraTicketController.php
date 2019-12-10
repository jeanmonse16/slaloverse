<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Ticket;
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

$route = "../../user";

if(!empty($_POST)){
$ticket = new Ticket();
$ticket->nombre = $_POST["nombre"];
$ticket->apellido = $_POST["apellido"];
$ticket->email = $_POST["correo"];
$ticket->save();
session_start();
$_SESSION["email"] = $_POST["correo"];
header("Location: ../../");
}else{
  echo"there was a mistake";
}

?>