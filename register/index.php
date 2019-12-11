<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="../styles/register.css">
    <title>Document</title>
</head>
<body>
  <div class="navbar">
    <div class="navbar__row1">
      <a href=".."><img src="../images/Slaloverse2.png" /><a>
      <a href="../app/controllers/TicketsController.php">Tickets<a>
      <a href="../slalo-awards">Slalo Awards<a>
      <a href="../slalo-play">Slalo Play<a>
    </div>
    <div class="navbar__row2">
    <?php
      ini_set("display_errors", 0);
      session_start();
      $user = "../user";
      $login = "../login";
      $register = "../register";
      if($_SESSION["email"]){
        echo "<a href=$user>Tu cuenta<a>";
      }else{
        echo "<a href=$login>Sign In<a>
                <a href=$register>Sign Up<a>";
      }
      ?>
    </div>
  </div>
  <section class="login">
      <section class="login__container">
        <h2>Regístrate</h2>
        <form action="../app/controllers/RegisterController.php" method="post" class="login__container--form">
          <input class="input" type="text" placeholder="Nombre" name="nombre">
          <input class="input" type="text" placeholder="Apellido" name="apellido">
          <input class="input" type="email" placeholder="Correo" name="correo">
          <input class="input" type="password" placeholder="Contraseña" name="password">
          <button class="button">Regístrate</button>
        </form>
        <p class="login__container--register">¿Ya tienes cuenta? <a href="../login">Inicia Sesión</a></p>
      </section>
  </section>
</body>
</html>