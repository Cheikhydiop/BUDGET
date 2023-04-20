<?php
session_start();
//var_dump($_GET['id']);die();
$pdo=new PDO('mysql:host=localhost;dbname=ressource','root','');
$getid=$_GET['id'];
$recupuser=$pdo->prepare('delete  from revenu where id=?');
$recupuser->execute(array($getid));
header("locaion:accueil.php");

?>