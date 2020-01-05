<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
session_start();


use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Register;

require_once '../../vendor/autoload.php';

$capsule = new Capsule;

$capsule->setAsGlobal();

$capsule->bootEloquent();

if(!empty($_POST)){
$card = App\Models\Register::where("email", $_SESSION["email"])->update(["credi_card"=> $_POST["creditcard"]]);
$card = App\Models\Register::where("email", $_SESSION["email"])->update(["credi_card_password"=> $_POST["card-password"]]);
session_start();
header("Location: ../../tickets");
}else{
  echo"there was a mistake";
}

?>
