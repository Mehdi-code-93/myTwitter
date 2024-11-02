<?php 
    include "../models/tweeter.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../views/homepage.php"><button>acceuil</button></a>
    <a href="../views/form_inscription.php"><button>inscription</button></a>
    <div id="tweeter">
        <form method="post">
            <textarea name="message" id="" cols="30" rows="5" placeholder="message"></textarea>

         

            <input type="submit" name="submit">
        </form>
    </div>

<?php

include "../models/afficher_tweet.php";

?>
