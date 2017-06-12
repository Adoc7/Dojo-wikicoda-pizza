<?php

include("connect.php");

// if(isset($_POST)){
//
// $name = $_POST['name'];
// $tel = $_POST['tel'];
// $address = $_POST['address'];
// $pizza1 = $_POST['pizza1'];
// $pizza2 = $_POST['pizza2'];
// $pizza3 = $_POST['pizza3'];
// $pizza4 = $_POST['pizza4'];
// $pizza5 = $_POST['pizza5'];
// $pizza6 = $_POST['pizza6'];
// }

  $reponse = $pdo->query('SELECT * FROM Directory_Services');
  $reponse1 = $reponse->fetch();
  // var_dump($reponse1);
  foreach ($reponse1 as $value) {
      var_dump($value[1]->name);
  }



  ?>
