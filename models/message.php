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


if (!empty($_POST)) {

    extract($_POST);
    $valid = (boolean) true;

    if (isset($_POST['submit'])) {

        $message = (String) (trim($message));

        if (empty($message)) {
            $valid = false;
            $error_message = "veuillez renseigner ce champs";
        }

        if ($valid) {
            
            $id_sender = $_SESSION['id'];
            // $id_receveur : recuperer dans form_msg.php

            // ======== Insert mon message vers la personne séléctionnée ========
            $requette = $database->prepare("INSERT INTO private_message (id_sender, id_receiver, message) VALUES ('$id_sender', '$id_receveur', '$message')");
            $requette->execute();
            
        }
    
    }
}


?>

