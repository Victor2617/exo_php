<!doctype html>
<html  lang ="fr">
    <tête>
        <jeu de caractères méta  ="utf-8" >
        <titre> Exercice 3 </titre>
        <lien  rel =" feuille de style " href =" style.css ">
        <script  src =" script.js "> </script>
    </tête>
    <body>
        <table border="1">

    <?php

       $tableau[0][0] = "nom";
       $tableau[0][1] = "prenom";
       $tableau[0][2] = "MDP";
      
           echo "<tr>";

           for ($i = 0; $i <= 2; $i++)
               {
           echo "<th>".$tableau[0][$i]."</th>";
           
           }

          echo "</tr>";
    ?>

    <?php

        $tableau[1][0] = "Flandre";
        $tableau[1][1] = "Victor";
        $tableau[1][2] = "Templier";

            echo "<tr>";

            for ($i = 0; $i <= 2; $i++)
                {
           echo "<td>".$tableau[1][$i]."</td>";
           
           }

           echo "</tr>";
    ?>

    <?php

        $tableau[2][0] = "Flandre";
        $tableau[2][1] = "Léa";
        $tableau[2][2] = "Année 80";

            echo "<tr>";

            for ($i = 0; $i <= 2; $i++)
                {
           echo "<td>".$tableau[2][$i]."</td>";
           
           }

           echo "</tr>";
    ?>

    <?php

        $tableau[3][0] = "Flandre";
        $tableau[3][1] = "Benjamin";
        $tableau[3][2] = "Hard rock";

            echo "<tr>";

            for ($i = 0; $i <= 2; $i++)
                {
            echo "<td>".$tableau[3][$i]."</td>";
   
            } 
            
            echo "</tr>";
    ?>



        </table>
    </body>
</html>