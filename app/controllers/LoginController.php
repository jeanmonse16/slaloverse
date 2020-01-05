<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Register;

require_once '../../vendor/autoload.php';

$capsule = new Capsule;

$capsule->setAsGlobal();

$capsule->bootEloquent();

if(!empty($_POST)){
    $user = Capsule::table("personas")->where("email",  $_POST["correo"])->first();
      if($user){
        $password = Capsule::table("personas")->where("contraseña", $_POST["password"])->first();
        if ($password) {
          session_start();
          $_SESSION["email"] = $_POST["correo"];
          header("Location: ../../user");
        } else{
        echo"nooooo";
        } 
      } else{
        echo"error";
    }

 }


?>

