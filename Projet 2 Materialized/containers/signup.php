<?php 
require_once "config.php"; 
$sql = "INSERT INTO user(firstname,secondename,pseudo,date,email,password,login) VALUES(:First_name,:Seconde_name,:Pseudo,:date_of_birthday,:email,:password,:login)";
$dataBinded=array(
    ':First_name'   => $_POST['firstname'],
    ':Seconde_name'   => $_POST['secondename'],
    ':pseudo'   => $_POST['pseudo'],
    ':date_of_birthday'   => $_POST['date'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':login'=> $_POST['login']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>