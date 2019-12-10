<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./user.css">
    <title>Document</title>
</head>
<body>
  <div class="navbar">
    <div class="navbar__row1">
      <a href=".."><img src="../images/Slaloverse2.png" /><a>
      <a href="../app/controllers/TicketsController.php">Tickets<a>
      <a href="../slalo-awards">Slalo Awards<a>
    </div>
    <div class="navbar__row2">
      <a href="../login">Sign In<a>
      <a href="./">Sign Up<a>
    </div>
  </div>
  <div class="user">
    <h1> Bienvenido </h1> <br>
  </div>
  <div class="button">
      <form action="../app/controllers/UsersController.php" method="post">
        <button>Log out</button>
      </form>
  </div>
</body>
</html>