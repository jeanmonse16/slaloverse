<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Document</title>
</head>
<body>
  <div class="navbar">
    <div class="navbar__row1">
      <a href=".."><img src="../images/Slaloverse2.png" /><a>
      <a href="../tickets">Tickets<a>
      <a href="../slalo-awards">Slalo Awards<a>
    </div>
    <div class="navbar__row2">
      <a href="../login">Sign In<a>
      <a href="../register">Sign Up<a>
    </div>
  </div>
  <section class="login">
      <section class="login__container">
        <h2>Inicia sesión</h2>
        <form action="../app/controllers/LoginController.php" method="post" class="login__container--form">
          <input class="input" type="text" placeholder="Correo" name="correo">
          <input class="input" type="password" placeholder="Contraseña" name="password">
          <button class="button">Iniciar sesión</button>
        </form>
        <p class="login__container--register">¿No tienes ninguna cuenta? <a href="">Regístrate</a></p>
      </section>
  </section>
</body>
</html>