<?php
$pdo=new PDO('mysql:host=localhost;dbname=ressource','root','');
$sel="select * from revenu";
 try
 {
   $pdo=new PDO('mysql:host=localhost;dbname=ressource','root','');
   //echo "connexion reussie";
   $sel="select * from revenu ";
   echo"<table border=1 frame='hsides' cellpadding='25' height='12%' align='center'>";
   echo"<tr bgcolor='blue'>";
      echo"<td>Date</td>"; 
      echo"<td>Titre</td>";
      echo"<td>Montant</td>";
      echo"<td>supprimer</td>";
      echo"<td>Modifier</td>";
   
   echo"<tr>";
   if($res=$pdo->query($sel))
  // echo"nous avons"." ".$res->rowCount()." "."depense"."</br>";
   while($r=$res->fetch(PDO::FETCH_NUM)){
   echo"<tr>";
      echo "<td>$r[1]</td>";
      echo"<td>salaire</td>";
      echo"<td>$r[2]</td>";
      echo"<td > <a href='suppRevenu.php?id=$r[0]' onclick='return confirm()'>supprimer</a></td>";
      echo"<td > <a href='updateRevenu.php?id=$r[0]' onclick='return confirm()'>Modifier</a></td>";
   echo"</tr>";

   echo"<tr>";
   echo"<td>$r[1]</td>";
   echo"<td>busness</td>";
   echo"<td>$r[3]</td>";
   echo"<td > <a href='supprimer.php?id=$r[0]' onclick='return confirm()'>supprimer</a></td>";
   echo"<td > <a href='update.php?id=$r[0]' onclick='return confirm()'>Modifier</a></td>";
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
    <a href="ajout_revenu.php"> <input type="button" id="left" value="Ajouter revenu" ></a>

 </body>
 </html>

