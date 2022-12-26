<?php session_start() ?>

<!DOCTYPE html>
<html  lang =" fr ">
    <tête>
        <jeu de caractères méta  =" UTF-8 ">
        <meta  http-equiv =" X-UA-Compatible " content =" IE=edge ">
        <meta  name =" viewport " content =" width=device-width, initial-scale=1.0 ">
        <title> Exo 7 - Les variables de session </title>
    </tête>
    <corps>

        <form  action =" exo7_varisessions.php " method =" post ">
            Texte... <type d'entrée  =" texte " nom =" champ1 ">
            <type d'entrée  =" soumettre " nom =" Victhor ">
        </formulaire >


    <?php
        
        if (empty( $_POST [ 'champ1' ])) // si rien n'a été saisi
        {
            echo " <p>Aucun texte n'a été saisi :(</p> ";
        }
        else
        {
            if (empty( $_SESSION [ 'sauvegarder' ]))
            {
                $_SESSION [ 'sauvegarder' ] = $_POST [ 'champ1' ];
                echo " <p> id = 'retour'> ". $_POST [ 'champ1' ]." </p> "; // sinon retourne le texte
                echo " <p> La variable enregistrée est donc : ". $_SESSION [ 'enregistrer' ]." </p> " ;
                
            }
            else 
            {
              echo " <p> Une variable de session n'a pas encore été déclarée.<p> " ;
            }
        }

    ?>
    
</corps>
</html>