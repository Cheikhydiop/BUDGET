<?php
$pdo=new PDO('mysql:host=localhost;dbname=ressource','root','');
$sel="select * from depense";

 try
 {
   $pdo=new PDO('mysql:host=localhost;dbname=ressource','root','');
   //echo "connexion reussie";
   $sel="select * from depense ";
   echo"<table border=1 frame='hsides' cellpadding='25' height='12%' align='center'>";
   echo"<tr bgcolor='blue'>";
      echo"<td>Date</td>";
      echo"<td>Titre</td>";
      echo"<td>Montant</td>";
      echo"<td>supprimer</td>";
      echo"<td>Modifier</td>";
   echo"<tr>";
   if($res=$pdo->query($sel))
   //var_dump($res);
  //echo"nous avons"." ".$res->rowCount()." "."depense"."</br>";
   while($d=$res->fetch(PDO::FETCH_NUM)){
   echo"<tr>";
      echo"<td>$d[1]</td>";
      echo"<td>loyer</td>";
      echo"<td>$d[2]</td>";
      echo"<td > <a href='supprimer.php?id=$d[0]' onclick='return confirm()'>supprimer</a></td>";
      echo"<td > <a href='update.php?id=$d[0][0]' onclick='return confirm()'>Modifier</a></td>";
   echo"</tr>";

      echo"<tr>";
      echo"<td>$d[1]</td>";
      echo"<td>manger</td>";
      echo"<td>$d[3]</td>";
      echo"<td > <a href='suppDepense.php?id=$d[0]' onclick='return confirm()'>supprimer</a></td>";
      echo"<td > <a href='update.php?id=$d[0][0]' onclick='return confirm()'>Modifier</a></td>";
echo"</tr>";


   }
 }
 catch(PDOException $e)
 {
    die("Erreur : " . $e->getMessage());

 }
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
   <meta charset="UTF-8">
   <title>Document</title>
 <style>
    #left{
        margin-left:584px
        
    }
 </style>
 </head>
 <body>
    <a href="depenser.php"> <input type="button" id="left" value="Ajouter Depense" ></a>
 </body>
 </html>

