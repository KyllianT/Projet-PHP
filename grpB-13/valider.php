<?php 
require_once "config.php"; 

$sql = "SELECT * FROM user WHERE name='".$_POST['name']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$username = $pre->fetch(PDO::FETCH_ASSOC);
if(!isset($_SESSION['name']['admin']) || $_SESSION['name']['admin']==0){
    header('Location: index.php');
    exit();
  }
else{
    header('Location:admin.php');//on le redirige sur la page d'accueil du site !
}
?>