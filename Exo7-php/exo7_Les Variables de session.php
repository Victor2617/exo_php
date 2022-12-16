<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 php</title>
</head>
<body>

<form action="exo7.php" methof="post">
    <p>
    
    Saisir message : <input type="text" name="msg" value="">
    <input type="submit" value="valider">
</form>
</p>
<?php
    if (isset($_POST['msg']))
    {
        $_SESSION['msg']=$_POST['msg'];
        echo "Vous avez saisi : ".$_SESSION['msg'];
    }
?>
</body>
</html>