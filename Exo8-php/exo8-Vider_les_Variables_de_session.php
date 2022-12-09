<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 php</title>
</head>
<body>

<form action="" method="sessions">
    <?php
<h1>
    if(isset($_SESSION["nom"])){
        echo "<div> tu est :".$_SESSION["nom"]." .<div>";
    }else{
        echo "saisi ton nom !!";
    }

    ?>
        <input type="texte" name="nom">
        <input type="submit" name="formatairedeNom">
    </form> 
      
</body>
</html>