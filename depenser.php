<?php
//recuperationdes donnee
@$loyer=( $_POST['loyer']);
@$manger=($_POST['manger']);
@$trans=($_POST['trans']);
@$autre=($_POST['autre']);
@$valider=$_POST['valider'];
@$msg="";
//controle de saisi
if(isset($valider)){
    if($loyer<0) echo "<li>nombre invalide ou laisser vide</li>"."<br/>";
    if($manger<0) echo "<li>nombre invalide ou laisser vide</li>"."<br/>";
    if($autre<0) echo "<li>nombre invalide ou laisser vide</li>"."<br/>";
    if($trans<0)  echo "<li>nombre invalide ou laisser vide</li>"."<br/>";

        //connexion du base de donnee et rattrapage des erreur
  
    try{
     
        $pdo= new PDO("mysql:host=localhost;dbname=ressource","root","");
    }
    catch(PDOException $e){
       echo "erreur:".$e->getMessage();
    }
       //manipulation des donnee
   
       $revenu=$pdo->prepare("insert into depense(date,loyer,manger,transport,autre) values(now(),?,?,?,?)");
       $revenu->execute(array($loyer,$manger,$trans,$autre));
       $revenu->execute();
       $msg="reuissi";

   }


?>
<!Doctype html>
<html>
    <head>
        <metacharset="utf-8">
    </head>

<body>

  <FIeldset ><legend style="text-align:center">***Ajout Depense***</legend>
    
    <form method="POST" action=" " >
      <table border=1  >
        <tr> 
            <td><input type="text"  classe="cl"name="loyer" placeholder="LOYER"></td>
            <td><input type="text"  classe="cl"name="manger" placeholder="MANGER"></td>
        <tr>
             <td> <input type="number" min="1" classe="cl"name="trans" placeholder="TRANSPORT"></td>
             <td> <input type="number" min="1" classe="cl"name="autre" placeholder="AUTRES"></td>
             </tr>
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




