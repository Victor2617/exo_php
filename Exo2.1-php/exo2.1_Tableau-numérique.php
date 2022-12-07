<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2.1</title>
</head>
<body>
    echo "Exo2"
    <table border='1'>
<?php
   

    $montableau = 
    [
        0 => 17,
        1 => 26,
        2 => 22,
        3 => 8,
        4 => 15,

    ];

    for ($i = 0; $i < sizeof($montableau); $i++) 
    {
        echo "<th>".$montableau[$i]."</th>";
    }

?>
   
   <?php
            echo"<tr>";
            $ongle =[
                1 => "Flandre", 
                2 => "Victor", 
                3 => "PoirePhp",
            ];
            for($i=1; $i <= sizeof($ongle); $i++){
            echo "<th>".$ongle[$i]."</th>";
            }
            echo"</tr>"
        ?>
</table>

</body>
</html>