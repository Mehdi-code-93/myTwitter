<?php

include "../models/conexion.php";
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
    <link rel="stylesheet" href="../views/css/conn.css">
    <title>Connexion</title>
</head>
<body>
    <main>

    <nav>
    <img src="../views/images/twitter.png" alt="twitter">
        <h1 class="tweeter">Tweeter</h1>
      <div class="option">
        <a class="t" href="../views/homepage.php">Acceuil</a>
         <a class="t" href="../views/form_con.php">Inscription</a>
      </div>
    </nav>
    
    <div class="global">
    <div class="Conn">
        <h1>Connexion</h1>
    </div>
    <form action="" method="post" class="form">
        <div class="form">
            <label for="email">Etrez votre email : </label>
            <input type="text" id="pseudo" name="email" placeholder="Etrez email ou pseudo: ">
        </div>

        <div class="form">
            <label for="mp">Entrez mot de passee: </label>
            <input type="text" name="mp" id="mp" placeholder=" mot de passe:">
        </div>
       

        <div class="submit">
            <!-- <input type="submit" value="Connectez-vous" name="Connexion"> -->
            <input id="boutton" type="submit" name="submit">
            </div>
    </form>   

            <h5>Vous n'avez pas de compte<br>
            <a id="btnIncrit" href="../views/form_inscription.php">Inscrivez vous</a>
        </h5>
</div> 
    </main>
</body>
</html>  