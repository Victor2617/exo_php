
<?php
session_start();
    if (isset($_GET['Cookies']))
    {
        $_SESSION['Cookies']=$_GET['Cookies'];
        echo "Vous avez saisi : ".$_SESSION['Cookies'];
    }
?>
        <p> Veuillez saisir votre login et votre mot de passe: </p>

        <form method="get">
            Entrez votre login : 
            <input type="text" name="texte">


        </form>

        <form method="get">
            Entrez votre mot de passe : <input type="text" name="texte">
            <input type="submit">
            <input type="submit" value="Deconnexion" name="Deconnexion" >

        </form>
        
        <?php
        if(isset($_GET["Deconnexion"]))
        {
        session_unset();
        session_destroy();
        } 
        if (!empty($_GET))
        {
            if (!empty($_SESSION))
            {
                if (empty($_GET['texte'])) 
                {
                    echo "<div>Il n'y a pas de texte !</div>";
                    
                } 

                else 
                {
                    echo "<div> Le login et ou le mot de passe incorrecte: <span id='violet'>".$_GET['texte']."</span></div>";
                    
                    $_SESSION["mem"] = "<span id='violet'>".$_GET['texte']."</span>";
                }
            }

            else
            {
                if (empty($_GET['texte']))
                {
                    echo "<div> Il n'y a pas de texte !</div>";
                    
                } 

                else 
                {
                    echo "<div> Bienvenue Julien: <span id='violet'>".$_GET['texte']."</span></div>";
                    
                    reset($_SESSION);
                    $_SESSION["mem"] = "<span id='violet'>".$_GET['texte']."</span>";
                }
            }
        }

        ?>