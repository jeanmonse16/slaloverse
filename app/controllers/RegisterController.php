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

if(!empty($_POST)){
$users = new Register();
$users->nombre = $_POST["nombre"];
$users->apellido = $_POST["apellido"];
$users->email = $_POST["correo"];
$users->contraseña = $_POST["password"];
$users->save();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../styles/global.css">
    <title>Document</title>
</head>
<body>
<div class="navbar">
    <div class="navbar__row1">
      <a href=".."><img src="../../images/Slaloverse2.png" /><a>
      <a href="../tickets">Tickets<a>
      <a href="../slalo-awards">Slalo Awards<a>
    </div>
    <div class="navbar__row2">
      <a href="../login">Sign In<a>
      <a href="/">Sign Up<a>
    </div>
  </div>
</body>
</html>

