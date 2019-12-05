<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate en Slaloverse</title>
    <link rel="stylesheet" href="global.css">
</head>
<body>
<body>
  <div class="header">
    <img class="header__img" src="./images/slaloverse.png"/>
  </div>
  <div class="navbar">
    <a>Inicio<a>
    <a>Tickets<a>
    <a>Slalo Awards<a>
    <a href="./login.php">Sign In<a>
    <a>Sign Up<a>
  </div>
    <h2>Registrate en <img src="./images/slaloverse.png " height="100"></h2>
    <form action="registrobd.php" method="POST">
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
    <a href="login.php">Inicia seccion</a>
    </form>
    
</body>
</html>