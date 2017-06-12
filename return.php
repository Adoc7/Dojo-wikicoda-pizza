
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

  <div class="list">
    <?php
    include("connect.php");


      $reponse = $pdo->query('SELECT * FROM Directory_Services');
      $reponse1 = $reponse->fetchAll();
      // var_dump($reponse1);
      foreach ($reponse1 as $value) {
        $prixtotal = $value->Pizza1*12 + $value->Pizza2*10 + $value->Pizza3*9 + $value->Pizza4*11 + $value->Pizza5*9 + $value->Pizza6*8;
          echo '<p>Commandé le : '.$value->Date.'</p><p>Nom : '.$value->Name.'</p><p> Tel : '.$value->Phone.'</p><p>Adresse : '.$value->Address.'</p><p>TOTAL : '.$prixtotal.'€</p><hr>';
      }
      ?>

    </div>
    </div>

</body>

</html>
