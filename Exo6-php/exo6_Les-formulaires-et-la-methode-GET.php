<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 php</title>
</head>
<body>
    <form action="" method="get">
    <?php

    if(isset($_GET["nom"])){
        echo "<div> tu est :".$_GET["nom"]." .<div>";
    }else{
        echo "saisi ton nom !!";
    }

    ?>
        <input type="texte" name="nom">
        <input type="submit" name="formatairedeNom">
    </form>   
</body>
</html>