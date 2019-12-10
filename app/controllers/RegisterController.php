<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Register;

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
$users = new Register();
$users->nombre = $_POST["nombre"];
$users->apellido = $_POST["apellido"];
$users->email = $_POST["correo"];
$users->contraseña = $_POST["password"];
$users->save();
session_start();
$_SESSION["email"] = $_POST["correo"];
header("Location: ../../user");
}else{
  echo"there was a mistake";
}

?>


