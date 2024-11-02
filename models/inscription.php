<?php
if(!isset($_SESSION)){

    session_start();
}
elseif(empty($_SESSION))
{ 
    session_unset();
    session_destroy();
}

if (!empty($_POST)) {

    extract($_POST);
    $valid = (boolean) true;

    if (isset($_POST['submit'])) {

        $email = (String) strtolower(trim($email));
        $password = (String) trim($password);
        $prenom = (String) ucfirst(trim($prenom));
        $pseudo = (String) trim($pseudo);
        // $date = ($date);
        $genre = (String) trim($genre);
        $city = (String) trim($city);


    
        if (empty($prenom)) {
            $valid = false;
            $error_prenom = "Veuiller renseigner ce champs !";
            echo "Veuiller renseigner ce champs !";
        }
        if (empty($pseudo)) {
            $valid = false;
            $error_pseudo = "veuillez renseigner ce champs";
        }
        if (empty($genre)) {
            $valid = false;
            $error_genre = "Veuiller renseigner ce champs !";
        }
        if (empty($date)) {
            var_dump($date);
            $valid = false;
            $error_date = "Veuiller renseigner ce champs !";
        }
        if (empty($email)) {
            $valid = false;
            $error_email = "Veuiller renseigner ce champs !";
        }
        if (empty($password)) {
            $valid = false;
            $error_password = "Veuiller renseigner ce champs !";
        }
        if (empty($city)) {
            $valid = false;
            $error_city = "Veuiller renseigner ce champs !";
        }


        if ($valid) {

            $null = NULL;

            $banner = "https://cdn.pixabay.com/photo/2016/09/24/23/14/nvidia-1692796_960_720.jpg";
            // $banner = "https://pixabay.com/images/id-1373171/";

            $avatar = "https://cdn.pixabay.com/photo/2016/09/24/23/14/nvidia-1692796_960_720.jpg";
            //$avatar = "https://www.flaticon.com/fr/icone-gratuite/utilisateur_996443?term=utilisateurs&page=1&position=5&origin=search&related_id=996443";

            $password = crypt($password, '$6$rounds=5000$fnzdcdjkn6GbJF46BVBC5282hgHF6FYGV7$');


           // $requette = $database->prepare("INSERT INTO users (banner, avatar, email, password, name, username, birthdate, gender, city) VALUES ('https://cdn.pixabay.com/photo/2016/09/24/23/14/nvidia-1692796_960_720.jpg', 'https://cdn.pixabay.com/photo/2016/09/24/23/14/nvidia-1692796_960_720.jpg', '$email', '$password', '$prenom', '$pseudo', '$date', '$genre', '$city')");
            $requette = $database->prepare("INSERT INTO users (banner, avatar, email, password, name, username, birthdate, gender, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $requette->execute(array($banner, $avatar, $email, $password, $prenom, $pseudo, $date, $genre, $city));
            // $requette->execute();
            $requette = $requette->fetch();
            
            header('Location: /mytweet/views/form_con.php');

            exit;
        }
    }
}

?>