<?php
    include('../models/tweeter.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/account.css">
    <link rel="stylesheet" href="../views/css/reset.css">
    <link rel="stylesheet" href="../views/sass/app.css">
    <title>Profil</title>
</head>
<body>

<div class="wrapper">

<header>

    <nav>

        <div class="profil">
            <div class="profilUser">
                
                
                    <?php
                        if (isset($_SESSION['avatar'])) {
                            
                            
                            
                        }
                        if ((isset($_SESSION['name'])) && (isset($_SESSION['username']))) {
                            echo "<h2>".$_SESSION['name']."</h2>";
                            echo "<p>@". $_SESSION['username']."</p>";
                        }
                    ?>
                

                
            </div>

            
            <div class="profilFollow">
                <p><span><?php echo "0";?></span> Following</p>
                <p><span><?php echo "0";?></span> Followers</p>
            </div>
        </div>

        <ul class="navList">
            <li>
                <a href="../views/homepage.php" class="navListButton ">
                    <div class="test">
                        <i class="fa-solid fa-house"></i>
                        <p>Accueil</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="./profil.php" class="navListButton navActive">
                    <div class="test">
                        <i class="fa-regular fa-user"></i>
                        <p>Profil</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="navListButton">
                    <div class="test">
                        <i class="fa-solid fa-hashtag"></i>
                        <p>Explorer</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="navListButton">
                    <div class="test">
                        <i class="fa-regular fa-bell"></i>
                        <p>Notifications</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="navListButton">
                    <div class="test">
                        <i class="fa-regular fa-envelope"></i>
                        <p>Messages</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="navListButton">
                    <div class="test">
                        <i class="fa-regular fa-bookmark"></i>
                        <p>Signets</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="navListButton">
                    <div class="test">
                        <i class="fa-brands fa-square-twitter"></i>
                        <p>Twitter Blue</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="navListButton">
                    <div class="test">
                        <i class="fa-solid fa-ellipsis"></i>
                        <p>Plus</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="../models/deco.php" class="navListButton">
                    <div class="test">
                        <i class="fa-regular fa-circle-xmark"></i>
                        <p>deconnexion</p>
                    </div>
                </a>
            </li>
        </ul>

        <div class="buttonTweeter">
            <button type="submit">Tweeter</button>
        </div>

    </nav>
    
    

</header>

<div class="profil2">
   

    <?php
                        if (isset($_SESSION['avatar'])) {
                            
                            echo'<img class="avatarTweet" src="'.$_SESSION['avatar'].'">' ;
                            
                        }
                        if (isset($_SESSION['banner'])) {
                            
                            echo'<img class="banner"src="'.$_SESSION['banner'].'">' ;
                            
                        } 
                        
                        if ((isset($_SESSION['name'])) && (isset($_SESSION['username']))) {
                            echo '<p class="name">'.$_SESSION['name'].'</p>';
                            echo '<p class="username">@'. $_SESSION['username'].'</p>';
                        }

    ?>

<di class="profil3">
    
<i class="fa-solid fa-city"></i>

                        <?php

                       
                        if (isset($_SESSION['city'])) {
                            
                            echo'<p class="city">'.$_SESSION['city'].'</p>' ;
                        }

                            ?> 
                            
<i class="fa-solid fa-cake-candles"></i>
                            <?php
                            if (isset($_SESSION['birthdate'])) {
                            
                            echo '<p class="birthdate">'.$_SESSION['birthdate'].'</p>' ;
                            
                        
                            }

                             
                            
                            ?>
                            
                        

            <?php
                        if (isset($_SESSION['bio'])) {
                            
                            echo "<p>".$_SESSION['bio']."</p>" ;
                            
                        }
                       
                        if (isset($_SESSION['id_follower'])) {
                            
                            // echo "<p>".$_SESSION['id_follower']."</p>" ;
                            
                        }
                        if (isset($_SESSION['id_following'])) {
                            
                            echo "<p>".$_SESSION['id_following']."</p>" ;
                            
                        }

                    ?>

</div>

</div>

</div>




<div class="editer">

<h1 class="titreprofil"> <i class="fa-solid fa-user"></i>    Editer le profil     </h1>


<div class="displaybtn">
<button class="btn">Modifier l'avatar</button>
<button class="btn"> Modifier la bannière</button>
<button class="btn"> Modifier la bio</button>
<button class="btn"><a href="../views/edit_city.php"> Modifier la ville</button>
</div>


</div>




<div class="afficherTweet">


<?php




if (isset($_POST['submit'])) {
    $tweet = $_POST['message'];
}


// $tweets = $database->prepare("SELECT TIMESTAMPDIFF(SECOND, date_send, NOW()) FROM tweet;");
// $tweets = $database->prepare("SELECT * FROM tweet where id_user = 10 ORDER BY date_send DESC");

$id = $_SESSION['id'];

// echo $id;

$tweets = $database->prepare("SELECT * FROM tweet left join users on tweet.id_user=users.id WHERE id_user = '$id' ORDER BY date_send DESC");
$tweets->execute();
$tweets = $tweets->fetchAll();

foreach ($tweets as $tweet) {     
         
    // echo '<p>' . $_SESSION['name'] . '</p>';
    // echo '<p>' . "@". $_SESSION['username'] . '</p>';
    // echo '<p>Posté le ' . htmlspecialchars($tweet['date_send']) . '</p>';     
    // echo '<p>' . htmlspecialchars($tweet['message']) . '</p>';    
    // echo '<a href="reponse_tweet.php?id=' . htmlspecialchars($tweet['id']) . '">Répondre</a>'; 




    echo '<div class="boxTweete">'.
            '<div class="tweetBlok">'.     
             '<img class="avatarTweete" src="'.htmlspecialchars($tweet['avatar']).'">'.
            '<h3>'. htmlspecialchars($tweet['name']) .'</h3>'.
            '<h3>'.'@'. htmlspecialchars($tweet['username']) .'</h3>'.
            '<h5>'. htmlspecialchars($tweet['date_send']) .'</h5>'.
            '</div>'.
            '<p class="msg">'. htmlspecialchars($tweet['message']) .'<p>'.
            '<a href="reponse_tweet.php?id=' . htmlspecialchars($tweet['id']) . '">Répondre</a>'.
        '</div>';

}


    
    
    

?>
<script src="https://kit.fontawesome.com/c1851b7f39.js" crossorigin="anonymous"></script>


</div>


    
    
</body>
</html>