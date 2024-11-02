<!-- ============= Envoie message ==============  -->
<?php 

session_start();
if(empty($_SESSION)){ 
    header('Location: /mytweet/views/form_con.php');
    exit;
}
else{
    include "../models/root.php";
}

$id = $_GET['id'];
echo $id;


        if (!empty($id)) {
            
            $id_user = $_SESSION['id'];
            // $id_receveur : recuperer dans form_msg.php

            // ======== Insert mon message vers la personne séléctionnée ========
            $requette = $database->prepare("INSERT INTO likes (id_tweet, id_user) VALUES ('$id', '$id_user')");
            $requette->execute();

            header('Location: /mytweet/views/homepage.php');
            exit;
            
        }

?>

