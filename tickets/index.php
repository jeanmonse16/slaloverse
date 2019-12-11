<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv=”Expires” content=”0″>
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="../styles/tickets.css">
    <title>Obtén tu ticket</title>
</head>
<body>
  <div class="navbar">
    <div class="navbar__row1">
      <a href="../"><img src="../images/Slaloverse2.png" /><a>
      <a href="/">Tickets<a>
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
  <div class="tickets-container">
    <div class="tickets-container___row">
    <div class="Badge">
       <div class="Badge__header">
           <img width="200"src="../images/Slaloverse2.png"></img>
       </div>

       <div class="Badge__section-name" id="ticketName">
           
       </div>
       
       <div class="Badge__section-info " id="ticketemail"> 
         <img src="../images/codigoqr.png"> </img> 
       </div>
       
       <div class="Badge__footer">
          #slaloverse
       </div>
       
       </div>
    </div>
    <div class="tickets-container___row2">
      <form action="../app/controllers/CompraTicketController.php" method="post">
        <h1> Compra tu ticket </h1>
        <input  type="text" placeholder="Nombre" name="nombre" id="nombre" onChange="ModificaNombreTicket()" name="firstName">
        <input  type="text" placeholder="Apellido" name="apellido" id="apellido" onChange="ModificaApellidoTicket()">
        <input  type="email" placeholder="Correo" name="correo" id="correo" onChange="ModificaEmailTicket()">
        <input  type="password" placeholder="Edad">
        <input  type="password" placeholder="Telefono">
        <button class="button">Comprar</button>
        <table border="1" class="table">
            <tr>
              <td><label for="correo_1">Descuento</label></td>
              <td>Descuento</td>
            </tr>
            <tr>
              <td><label for="correo_1">Subtotal</label></td>
              <td>500 camatiums</td>
            </tr>
            <tr>
              <td><label for="contraseña_1">Total</label></td>
              <td>total</td>
            </tr>
        </table>
      </form>
    </div>
  </div>
  <script src="../javascript/tickets.js"></script>
</body>
</html>