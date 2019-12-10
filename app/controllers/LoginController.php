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
    $user = Capsule::table("personas")->where("email",  $_POST["correo"])->first();
    if($user){
        if (password_verify($_POST['password'], $user->contraseña)) {
        echo "siiii";
      } 
    } else{
        echo"nooooo";
    }

    }


?>

<div class="navbar">
    <div class="navbar__row1">
      <a href=".."><img src="../images/Slaloverse2.png" /><a>
      <a href="../tickets">Tickets<a>
      <a href="../slalo-awards">Slalo Awards<a>
    </div>
    <div class="navbar__row2">
      <a href="../login">Sign In<a>
      <a href="/">Sign Up<a>
    </div>
  </div>