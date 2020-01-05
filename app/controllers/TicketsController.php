<?php

session_start();

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Register;


require_once '../../vendor/autoload.php';

$capsule = new Capsule;

$capsule->setAsGlobal();

$capsule->bootEloquent();



if($_SESSION["email"]){
    $card = App\Models\Register::where("email", $_SESSION["email"])->first();
    if(!$card->credi_card){
        header("Location: ../../add-your-credit-card");
    }else{
        header("Location: ../../tickets");
    }
}else{
    header("Location: ../../login");
}
