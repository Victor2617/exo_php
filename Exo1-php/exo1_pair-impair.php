<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Exercice 1 php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 
            $NombreAleatoire = rand ( 0 , 100 );
            ?>
            <p> Si mon nombre aléatoire est paire j'affiche du rouge, sinon j'affiche du bleu</p>
            <?php
            if ($NombreAleatoire%2 == 1)
            {
            ?>
                <div id = 'impair'>
                    <?php
                    echo $NombreAleatoire." est impair";
                    ?>
                </div>
            <?php
            }
            else
            {
            ?>
                <div id = 'pair'>
                    <?php
                    echo $NombreAleatoire." est pair";
                    ?>
                </div>
            <?php
            }

        ?>
</body>
</html>