<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="../styles/slaloawards.css">
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
  <div class="AwardSection">
  </div>
  <div class="ArtistYear-Section">
    <div class="ArtistYear__title">
      <h1>Nominees for Artist of the Year Award</h1>
    </div>
    <div class="ArtistYear-nominee">
      <div class="ArtistYear-img">
       <img src="../images/BillieEilish_2.png" alt="">
      </div>
      <h2>Billie Eilish</h2>
    </div>
    <div class="ArtistYear-nominee">
      <div class="ArtistYear-img">
       <img src="../images/TOP_2.png" alt="">
      </div>
      <h2>twenty one pilots</h2>
    </div>
    <div class="ArtistYear-nominee">
      <div class="ArtistYear-img">
       <img src="../images/PostMalone_2.png" alt="">
      </div>
      <h2>Post Malone</h2>
    </div>
  </div>
  <div class="ArtistPop-Section">
    <div class="ArtistPop__title">
      <h1>Nominees for best Pop Artist  Award</h1>
    </div>
    <div class="ArtistPop-nominee">
      <div class="ArtistPop-img">
       <img src="../images/BillieEilish_2.png" alt="">
      </div>
      <h2>Billie Eilish</h2>
    </div>
    <div class="ArtistPop-nominee">
      <div class="ArtistPop-img">
       <img src="../images/TOP_2.png" alt="">
      </div>
      <h2>twenty one pilots</h2>
    </div>
    <div class="ArtistPop-nominee">
      <div class="ArtistPop-img">
       <img src="../images/Coldplay_2.png" alt="">
      </div>
      <h2>Coldplay</h2>
    </div>
  </div>
  <div class="ArtistYear-Section">
    <div class="ArtistYear__title">
      <h1>Nominees for best Rock Artist Award</h1>
    </div>
    <div class="ArtistYear-nominee">
      <div class="ArtistYear-img">
       <img src="../images/Slipknot_2.png" alt="">
      </div>
      <h2>Slipknot</h2>
    </div>
    <div class="ArtistYear-nominee">
      <div class="ArtistYear-img">
       <img src="../images/LosMesoneros_2.png" alt="">
      </div>
      <h2>Los Mesoneros</h2>
    </div>
    <div class="ArtistYear-nominee">
      <div class="ArtistYear-img">
       <img src="../images/GunsnRoses.png" alt="">
      </div>
      <h2> Guns n Roses</h2>
    </div>
  </div>
  <div class="ArtistPop-Section">
    <div class="ArtistPop__title">
      <h1>Nominees for best Reggaeton Artist  Award</h1>
    </div>
    <div class="ArtistPop-nominee">
      <div class="ArtistPop-img">
       <img src="../images/DaddyYankee_2.png" alt="">
      </div>
      <h2>Daddy Yankee</h2>
    </div>
    <div class="ArtistPop-nominee">
      <div class="ArtistPop-img">
       <img src="../images/DannyOcean_2.png" alt="">
      </div>
      <h2>Danny Ocean</h2>
    </div>
    <div class="ArtistPop-nominee">
      <div class="ArtistPop-img">
       <img src="../images/JBalvin_2.png" alt="">
      </div>
      <h2>J Balvin</h2>
    </div>
  </div>
</body>
</html>