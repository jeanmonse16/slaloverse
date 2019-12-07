<?php


use App\Models\Register;

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

if(!empty($_POST)){
    $persona = new Register();
    $persona->nombre = $_POST["nombre"];
    $persona->apellido = $_POST["apellido"];
    $persona->email = $_POST["correo"];
    $persona->contraseña = $_POST["contraseña"];
    $persona->save();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate en Slaloverse</title>
</head>
<body>
    <h2>Registrate en <img src="../images/slaloverse.png " height="100"></h2>
    <form action="" method="POST">
        <table border="2">
        <tr>
            <td><label for="nombre">Nombre</label></td>
            <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre de usuario"></td>
        </tr>
        <tr>
            <td><label for="apellido">Apellido</label></td>
            <td> <input type="text" name="apellido" id="apellido" placeholder="Ingrese su nombre de usuario"><br></td>
        </tr>
        <tr>
            <td><label for="correo">Correo Electronico</label></td>
            <td> <input type="text" name="correo" id="correo" placeholder="Ingrese su correo electronico"><br></td>
        </tr>
       <tr>
           <td><label for="contraseña">Contraseña</label></td>
           <td><input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña"><br></td>
       </tr>
        <tr>
            <td><label for="confcontraseña">Confirmar contraseña</label></td>
            <td><input type="password" name="confcontraseña" id="confcontraseña" placeholder="Confirmar contraseña"><br></td>
        </tr>
        <tr>
            <td><button>Registarse</button></td>
        </tr>
        </table>
    <label>¿Ya tienes una cuenta en Slaloverse?</label>
    <a href="inicio_seccion.php">Inicia seccion</a>
    </form>
    
</body>
</html>