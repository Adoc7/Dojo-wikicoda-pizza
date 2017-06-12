<?php

include("connect.php");

if(isset($_POST)){


$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$pizza1 = $_POST['pizza1'];
$pizza2 = $_POST['pizza2'];
$pizza3 = $_POST['pizza3'];
$pizza4 = $_POST['pizza4'];
$pizza5 = $_POST['pizza5'];
$pizza6 = $_POST['pizza6'];
}

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
