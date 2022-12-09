<!doctype html>
<html  lang ="fr">
    <tête>
        <jeu de caractères méta  ="utf-8" >
        <titre> Exercice 4 php </titre>
        <lien  rel =" feuille de style " href =" style.css ">
        <script  src =" script.js "> </script>
    </tête>
    <body>

    <?php

    $A= rand (1, 100);
    $B= rand (-100, 100);
    $C= rand (-100, 100);
    $delta = $B**2-4*$A*$C; 

    echo "<p>  l'équation du second degré est ".$A."x²".$B."x+".$C."=0</p>";

    echo "<p> Donc A=".$A." B= ".$B." C= ".$C." </p>";

    echo "<p>  le résulte est ".$delta." </p>";

    if($delta > 0)

    {
        echo "delta est suppérieur a 0 de se fait il y a 2 solution";
        $delta1 = -$B - sqrt ($delta) / 2 * $A;
        $delta2 = -$B + sqrt ($delta) / 2 * $A;
        echo"<p> R1 est égale a ".$delta1." R2 et égale a ".$delta2. "</p>";
    }

    if($delta==0)
    {
        echo "delta est égale a 0 de se fait il y a 1 solution";
        $delta1 = -$B / 2 * $A;
       
        echo"<p> R1 est égale a ".$delta1."</p>";
    }
    if($delta<0)
    {
        echo "<p> delta est inférieur a 0 de se fait il n'y a pas de solution</p>";
    }
    ?>

    </body>
</html>   