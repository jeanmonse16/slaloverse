<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv=”Expires” content=”0″>
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <title>Bienvenido al Slaloverse</title>
</head>
<body>
  <div class="navbar">
    <div class="navbar__row1">
      <a href="/"><img src="../images/Slaloverse2.png" /><a>
      <a href="./app/controllers/TicketsController.php">Tickets<a>
      <a href="slalo-awards">Slalo Awards<a>
      <a href="slalo-play">Slalo Play<a>
    </div>
    <div class="navbar__row2">
      <?php
      ini_set("display_errors", 0);
      session_start();
      $user = "user";
      $login = "login";
      $register = "register";
      if($_SESSION["email"]){
        echo "<a href=$user>Tu cuenta<a>";
      }else{
        echo "<a href=$login>Sign In<a>
                <a href=$register>Sign Up<a>";
      }
      ?>
    </div>
  </div>
  <section class="carousel">
    <h1> Únete al Slaloverse !</h1>
    <div class="carousel__container">
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/Portada_1.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/fest1.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/fest2.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/Portada_3.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/Portada_2.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/fest3.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/fest4.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
      <div class="carousel__item">
        <img class="carousel-item__img" src="../images/fest5.jpg">
        <div class="carousel-item__details">
          <p class="carousel-item__details--title"> Welcome </p>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
  <div class="Pop-Section">
    <div class="Pop-Section__title">
      <h1> POP </h1>
    </div>
    <div class="Pop-Section__content">
      <div class="Pop-Section__row1">
        <img src="../images/Artistas_Pop.png" />
      </div>
      <div class="Pop-Section__row2">
        <p> Disfruta de los artistas Pop más populares de la actualidad</p>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
  <div class="Rock-Section">
    <div class="Rock-Section__title">
      <h1> ROCK </h1>
    </div>
    <div class="Rock-Section__content">
      <div class="Rock-Section__row1">
        <img src="../images/Artistas_Rock.png"/>
      </div>
      <div class="Rock-Section__row2">
        <p> Ve en vivo a los artistas Rock más icónicos</p>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
  <div class="Reggaeton-Section">
    <div class="Reggaeton-Section__title">
      <h1> REGGAETON </h1>
    </div>
    <div class="Reggaeton-Section__content">
      <div class="Reggaeton-Section__row1">
        <img src="../images/Artistas_Reggueton.png"/>
      </div>
      <div class="Reggaeton-Section__row2">
        <p> El mejor Reggaeton lo vives con nosotros!</p>
      </div>
    </div>
  </div>
  </div>
</body>
</html>