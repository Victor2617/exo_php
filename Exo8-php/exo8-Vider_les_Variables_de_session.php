<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 php</title>
</head>
<body>
<form action="" method="get">
    <?php
     session_start();
    if(isset($_GET["nom"])){
        echo "<div> tu est :".$_GET["nom"]." .<div>";
    }else{
        echo "saisi ton nom !!";
    }

    ?>
        <input type="texte" name="nom">
        <input type="submit" name="formatairedeNom">
    </form>   

    <form action="exo7.php" methof="post">
        <p>
    
        Saisir le mots de passe : <input type="text" name="msg" value="">
        <input type="submit" value="valider">
    </form>
        </p>
    <?php
        if (isset($_GET['msg']))
    {
        $_SESSION['msg']=$_GET['msg'];
        echo "Vous avez saisi : ".$_SESSION['msg'];
    }

    ?>

</body>
</html>