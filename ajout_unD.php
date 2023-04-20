<?php
//recuperationdes donnee
@$loyer=( $_POST['loyer']);
@$valider=$_POST['valider'];
@$msg="";
//controle de saisi
if(isset($valider)){
    if(empty($loyer) or $loyer<0) {
        echo "<mark>nombre invalide ou champlaisser vide</mark>"."<br/>";
    }else

    {  //connexion du base de donnee et rattrapage des erreur
  
      try{
     
    $pdo= new PDO("mysql:host=localhost;dbname=ressource","root","");
          }
    catch(PDOException $e){
       echo "erreur:".$e->getMessage();
    }
       //manipulation des donnee
   
       $revenu=$pdo->prepare("insert into depense(date,loyer) values(now(),?)");
       $revenu->execute(array($loyer));
       $revenu->execute();
       $msg=" <span>Ajout Réussi &#128525;</span>";

   

   }
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
    <h4>Ajouter Depense</h4>
    <table border=1>
        <tr>
          <td>loyer</td>
        </tr>
        </tr>
           <tr> 
             <td><input type="text"  classe="cl"name="loyer" ></td>
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




