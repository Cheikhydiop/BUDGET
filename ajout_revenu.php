<?php
//recuperationdes donnee
@$salaire= ($_POST['salaire']);
@$busnes=($_POST['busnes']);
@$valider=$_POST['valider'];
@$msg="";
//controle de saisi
if(isset($valider)){
     if($salaire<0) echo "<li>nombre invalide ou laiser vide</li>"."<br/>";
     if($busnes<0) echo "<li>nombre invalide ou laiser vide</li>"."<br/>";
        //connexion du base de donnee et rattrapage des erreur
  
      try{
     
    $pdo= new PDO("mysql:host=localhost;dbname=ressource","root","");
          }
    catch(PDOException $e){
       echo "erreur:".$e->getMessage();
    }
       //manipulation des donnee
   
    $ins=$pdo->prepare("insert into revenu(date,salaire,busness) values(now(),?,?)");
    $ins->execute(array($salaire,$busnes));
    $revenu= $pdo->prepare("SELECT SUM(salaire)+SUM(busness) FROM revenu");
    $revenu->execute();
    $r= $revenu->fetchAll(PDO::FETCH_NUM);
    $msg="reuissi";

   }


?>
<!Doctype html>
<html>
    <head>
        <metacharset="utf-8">
    </head>

<body>

  <FIeldset>
   
        <legend style="text-align:center"></legend>
    
<form method="POST" action="">
    <table border=1>
        <tr>
            <td>Revenu</td>
            <td>Depense</td>
        </tr>
           <tr>
            <td><input type="text"  classe="cl"name="salaire" placeholder="salaire " ></td>
            <td><input type="text"  classe="cl"name="busnes" placeholder="BUSNES"></td>
            
        </tr>
           
        
    </table>
     <input type="submit" name="valider" value="VALIDER"  placeholder="VALIDER">
        
</form>
</FIeldset>

</body>

<?php 
  if(isset($valider)){
            if(!empty($msg)) {?>
            <div id2="id2" style="background-color:green"><?= $msg?> </div>
 
<?php } } ?>

</html>




