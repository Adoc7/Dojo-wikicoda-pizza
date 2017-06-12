<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100|Roboto:100" rel="stylesheet">
  <script src="jquery-3.2.1.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Dojo-wikicoda-pizza</title>
</head>

<body>


  <header>
    <img id="logo" src="images/logo2.png" alt="logo">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="script.php">Liste commandes</a></li>
    </ul>
    <img id="strap" src="images/bg_top.jpg">
  </header>

  <div class="ensemble">
    <section class="top">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
          <div class="menulogo">
            <div><img src="images/logo.png" alt="logo pizza">
              <div class="ligne"></div>
            </div>
            <form method="post" action="return.php">
              <input ID="btn" type="submit" value="LISTE DES COMMANDES"></input>
            </form>

          </div>
        </div>
        <div class="formulaire col-xs-12 col-sm-12 col-md-6">

        </div>
      </div>
    </section>
  </div>

<?php

include("connect.php");

$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$pizza1 = $_POST['pizza1'];
$pizza2 = $_POST['pizza2'];
$pizza3 = $_POST['pizza3'];
$pizza4 = $_POST['pizza4'];
$pizza5 = $_POST['pizza5'];
$pizza6 = $_POST['pizza6'];

$req = $pdo->prepare("INSERT INTO Directory_Services (Name, Phone, Address, Pizza1, Pizza2, Pizza3, Pizza4, Pizza5, Pizza6)
VALUES (:Name, :Phone, :Address, :Pizza1, :Pizza2, :Pizza3, :Pizza4, :Pizza5, :Pizza6)");

$req->execute(array(
    'Name' => $name,
    'Phone' => $tel,
    'Address' => $address,
    'Pizza1'=> (int)$pizza1,
    'Pizza2'=> (int)$pizza2,
    'Pizza3'=> (int)$pizza3,
    'Pizza4'=> (int)$pizza4,
    'Pizza5'=> (int)$pizza5,
    'Pizza6'=> (int)$pizza6
));

print_r($pdo->errorInfo());
?>

</body>
</html>
