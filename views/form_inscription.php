<?php
   
   include ("../models/root.php");
   include ("../models/inscription.php");
if (!empty($_SESSION)) {
   header('Location: /mytweet/views/homepage.php');
   exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/inscription.css">
    <title>formulaire inscription</title>
</head>
</head>
<body>

<main>
   <nav>
      <img src="../views/images/twitter.png" alt="twitter">
        <h1 class="tweeter">Tweeter</h1>
      <div class="option">
         <a class="t" href="../views/homepage.php">Acceuil</a>
         <a class="t" href="../views/form_con.php">Connexion</a>
      </div>
    </nav>

    <div class="blok1">
            
            <form method="post">

                <div id="blokForm">

                    <h3>Inscription</h3>

                    <div class="input">
                        <input type="text" id="prenom" name="prenom" placeholder="Prenom">
                    </div>
                
                    <div class="input">
                        <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
                    </div>

                    
                    <div class="lesChoix">
                        <select type="sexe" class="choix" name="genre">
                            <option>Sexe :</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>


                    <div class="input">
                            
                            <input type="date" id="date" name="date"
                            value="2000-07-22"
                            min="1920-01-01" max="2023-12-31">
                    </div>



                    <div class="input">
                        <input type="text" id="city" name="city" placeholder="city">
                        <?php
                            if (isset($error_pseudo)) {
                                echo $error_pseudo;
                            }
                        ?>
                    </div>
                    
                    <div class="input">
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="input">
                        <input type="password" id="password" name="password" placeholder="Mot de passe">
                    </div>

                    

                </div>

                <input id="boutton" type="submit" name="submit">


                <h5>Vous avez deja un compte ?</br>
                    <a id="btnInscrit" href="../views/form_con.php">Connectez vous !</a>
                </h5>

            </form>


        </div>



        <div class="blok blok2"></div>

</main>
</body>
</html>