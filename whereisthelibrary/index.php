<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<table action="" method="post" border="1" class="table">
            <tr>
              <td><label for="correo_1">tickets vendidos totales </label></td>
              <td id="descuento">
                 5
              </td>
            </tr>
            <tr>
              <td><label for="correo_1">Usuarios Totales</label></td>
              <td>
                21
              </td>
            </tr>
        </table>
        <button>Borrar al usuario 21</button>
        <?php
        ini_set("display_errors", 1);
                ini_set("display_startup_errors", 1);
                error_reporting(E_ALL);
                
                
                use Illuminate\Database\Capsule\Manager as Capsule;
                use App\Models\Register;
                
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

                $user = Capsule::table("personas")->where("id_personas", 21)->delete();
                ?>
</body>
</html>