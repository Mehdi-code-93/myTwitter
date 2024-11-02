
<?php 

session_start();
if(empty($_SESSION)) 
{ 
    // echo "nooo";

    // header('Location: /mytweet/views/form_inscription.php');
    exit;
}
else{
    // echo "yes";
    // session_start();
    include "../models/root.php";


}


$id_users = $_SESSION['id'];

// echo $_SESSION['id'];


if (!empty($_POST)) {
    // echo "3\n";
    
        extract($_POST);
        $valid = (boolean) true;
    
        if (isset($_POST['submit'])) {
    
            // $message = (String) ($message);
            $message = (String) (trim($message));
            // $image = (String) trim($image);
    
            if (empty($message)) {
                // echo "erreur_message\n";
                $valid = false;
                $error_message = "veuillez renseigner ce champs";

            }

            // if (empty($image)) {
            //     echo "7\n";
            //     $valid = false;
            //     $error_image = "veuillez renseigner ce champs";
            // }
            if ($valid) {
                // echo "valide\n";
                // $id_user = 62;

                $id_users = $_SESSION['id'];

                // echo $_SESSION['id'];
    
    
                $requette = $database->prepare("INSERT INTO tweet (id_user, message) VALUES ('$id_users', '$message')");
                $requette->execute();

            }
        
        }
}

?>