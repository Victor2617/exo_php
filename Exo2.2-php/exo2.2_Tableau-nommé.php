<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2.2</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
    <table border='1'>
        
        
        <?php
            $ongle =[
                1 => "Flandre", 
                2 => "Victor", 
                3 => "PoirePhp",
            ];
            for($i=1; $i <= sizeof($ongle); $i++){
            echo "<th>".$ongle[$i]."</th>";
            }
        ?>

    </table>

    </body>
</html>