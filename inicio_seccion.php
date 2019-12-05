<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicia Seccion en Slaloverse</title>
</head>
<body>
    <h2>Inicia seccion en <img src="./imagenes/Slaloverse_logo_pequeño.png " height="100"></h2>
    <form action="inciobd.php">
        <table border="2">
            <tr>
            <td><label for="correo_1">Correo electronico</label></td>
            <td><input type="text" name="correo_1" id="correo_1" placeholder="Ingrese su correo"></td>
            </tr>
            <tr>
            <td><label for="contraseña_1">Contraseña</label></td>
            <td><input type="password" name="contraseña_1" id="contraseña_1" placeholder="Ingrese su contraseña"></td>
            </tr>
        </table>
        <label>No tienes una cuenta en Slaloverse</label>
        <a href="registro.php">Registrate aqui</a>
    </form> 
</body>
</html>