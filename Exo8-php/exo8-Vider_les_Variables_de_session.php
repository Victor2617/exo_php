<?php session_start() ?> 
<!DOCTYPE html >
<html  lang =" fr ">
    <tête >
        <jeu de caractères méta  =" utf-8 " >
        <titre > Exercice final premier parti : </titre>
        <lien  rel =" feuille de style " href =" style.css ">                                                                                                    
        <script  src =" script.js "> </script>    
    </tête >
    <corps>

    <h1> Veuillez saisir votre Nom d'utilisateur et votre mot de passe : </h1>
<?php

 //Traitement du formulaire de connexion
    if(isset($_POST["Connection"])){
        if($_POST["password"]=="1234" && $_POST["login"]=="julien" ){
 //si identifié alors session true
    $_SESSION["EtatConnexion"]=true ;
 }else{
    if($_POST["password"]!="1234"){
        echo "Ce n'est pas le bon mdp";
 }
    if($_POST["login"]!="julien"){
        echo "Ce n'est pas le bon Login";
 }
 }
 }

 //Traitement du formulaire de deconnexion
 if(isset($_POST["Deconnexion"])){
    session_unset();
    session_destroy();
 }

//si il y a une session on affiche le site sinon ça sera le formulaire de connexion
if((isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"]==true)){
    ?>
        <p> Bienvenue julien !!! </p>
        <form action="" method="post" class="form-example">
            <div class="form-example">
            <div class="form-example">
                <input type="submit" value="Deconnexion" name="Deconnexion" >
            </div>
        </form>
    <?php

    }else{

    ?>
        <form action="" method="post" class="form-example">
            <div class="form-example">
                <label for="login">Entrer: </label>
                <input type="text"  name="login" id="login" required placeholder="Non d'utilisateur : ">
            </div>
            <div class="form-example">
                <label for="password"> Entrer: </label>
                <input type="password"  name="password" id="password" required placeholder="Mots de pass : ">
            </div>
            <div class="form-example">
                <input type="submit" value="Connection" name="Connection" >
            </div>
        </form>
    <?php
 }
 //highlight_file(__FILE__);
 ?>

    </corps>
</html>        