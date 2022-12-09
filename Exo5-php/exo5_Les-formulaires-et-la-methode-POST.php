<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 php</title>
</head>
<body>
    <form action="" method="post">
    <?php


    if(isset($_POST["nom"])){
        echo "<div> tu est :".$_POST["nom"]." .</div>";
    }else{
        echo "saisi ton nom !!";
    }

    ?>

   
        <input type="text" name="nom">
        <input type="submit" name="formulairedeNom">
    </form>   
</body>
</html>