<?php


if(!isset($_SESSION)){

    session_start();

}
elseif(empty($_SESSION)) 
{ 

    echo "ok";
}
elseif(empty($_SESSION)) 
{ 
    echo "no";

    session_unset();
    session_destroy();
}

include('../models/root.php');

// session_start();
// include('../models/root.php');

if(!empty($_POST)){
    extract($_POST);
    $valid = true ;
    
        if(isset($_POST['submit'])){
            $email = htmlspecialchars($_POST['email']);
            // $pseudo = htmlspecialchars($_POST['username']);
            // $a = htmlspecialchars($_POST['a']);
            $password = htmlspecialchars($_POST['mp']);
            $erreur_email = "";




            if(empty($email) && empty($password)){
                $valid = false;
                $erreur_email = "Veuillez renseigner ce champs !";
                echo "$erreur_email\n";
            }else{
                echo $email;
                echo $password;

                $req = $database->prepare("SELECT id from users where email = ?  AND password = ?");

                $req->execute(array($email, crypt($password, '$6$rounds=5000$fnzdcdjkn6GbJF46BVBC5282hgHF6FYGV7$')));
                $req->execute();
                $utilisateur = $req->fetch();
                echo "1";

                
                if(!isset($utilisateur['id'])){
                    $valid=false;
                    $erreur_email = "Veuillez renseigner ce champs !";
                    echo "$erreur_email\n";
                    echo "2";
                  
                
                } elseif ($valid) {

                    $req = $database->prepare("SELECT * from users where id = ?");
                    $req->execute(array($utilisateur['id']));
                    $utilisateur = $req->fetch();
                    echo "3";

                    print_r($_POST);

                    header('Location: ../views/homepage.php');



            $_SESSION['id'] = $utilisateur['id'];
            $_SESSION['name'] = $utilisateur['name'];
            $_SESSION['email'] = $utilisateur['email'];
            $_SESSION['username'] = $utilisateur['username'];
            $_SESSION['banner'] = $utilisateur['banner'];
            $_SESSION['avatar'] = $utilisateur['avatar'];
            $_SESSION['id_follower'] = $utilisateur['id_follower'];
            $_SESSION['id_following'] = $utilisateur['id_following'];
            $_SESSION['city'] = $utilisateur['city'];
            $_SESSION['birthdate'] = $utilisateur['birthdate'];


            

            header('Location: ../views/homepage.php');
            exit;


                }

            }

        }
        
}

?>