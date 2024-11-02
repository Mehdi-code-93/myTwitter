<!-- ============= messagerie privée ==============  -->

<?php

// Recuperation de l'id et du username de la personne selectionnée grace a un form GET dans "aff_users.php" et "afficher_tweet.php"

$id_receveur = $_GET['id'];
$name_receveur = $_GET['username'];

// ====== include du fichier pour envoyer les message ======
include "../models/message.php";

?>


<!-- =========================== html =========================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/msg.css">
    <title>Document</title>
</head>
<body>

    <header>

        <a href="../views/homepage.php"><img class="logo" src="../views/images/twitter.png" alt=""></a>
        <a class="btnProfile" href="../views/profil.php"><button  class="btnProfile"><?php echo '@'.$_SESSION['username'] ?></button></a>

    </header>


    <main>

        <div id="message">

        
            <div class="username">
                <?php
                    echo '<h2>@'.$name_receveur.'</h2>';
                ?>
            </div>


            <div id="contenue">
                <?php
            // ========= include du fichier pour afficher les message =========
                    include "../models/aff_msg.php";
                ?>
            </div>

            
            <!-- ========= formulaire pour ecrire un message ========= -->
            <form class="formMsg" method="post">

                <textarea name="message" id="areaMsg" cols="30" rows="5" placeholder="message"></textarea>
                <input id="btnMsg" type="submit" name="submit">

            </form>


        </div>

    </main>

    <!-- JS: Pour demarrer le scroll des message en bas -->
    <script src="../views/js/scroll.js"></script>
</body>
</html>