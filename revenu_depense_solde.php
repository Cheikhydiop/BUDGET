<?php
include "calcul.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #conteneur{
            border:solid 2px red;
            min-height:30px;
            display:flex;
            justify-content:space-around;  
            background-color:blue;
        
        .c1{
            width: 300;
            height: 200px;
            
        }
        
        }
    </style>
</head>
<body>
    <div id="conteneur">
    
       <button><?=$r[0][0]?>&#8364;</button>
       <button><?=$d[0][0] ?>&#8364;</button>
       <button><?=$resultat ?>&#8364;</button>
    </div>
    
</body>
</html>