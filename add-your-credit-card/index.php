<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/creditcard.css">
    <title>Document</title>
</head>
<body>
  <div class="paypal">
    <img src="../images/paypal.png" alt="">
  </div>
  <div class="payment">
  <form action="../app/controllers/CreditCardController.php" method="post">
      <input type="text" placeholder="credit card number" name="creditcard">
      <input type="password" placeholder="account password" name="card-password">
      <button>Submit</button>
  </form>
  </div>
</body>
</html>