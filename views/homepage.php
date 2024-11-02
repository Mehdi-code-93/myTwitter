<?php

// if (!isset($_SESSION)) {
//    header('Location: /mytweet/views/form_inscription.php');
//    exit;
// }
    include('../models/tweeter.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil / Twitter</title>
    <link rel="stylesheet" href="../views/css/reset.css">
    <link rel="stylesheet" href="../views/sass/app.css">
</head>
<body>

    <div class="wrapper">

        <header>

            <nav>

                <div class="profil">
                    <div class="profilUser">

                    <a href="../views/homepage.php"><img class="logo" src="../views/images/twitter.png" alt=""></a>
                        
                            <?php
                                if (isset($_SESSION['avatar'])) {
                                    // echo "<img src=".$_SESSION['banner'].">";
                                    // echo '<img class="avatarTweet" src="'.$_SESSION['avatar'].'">';
                                    
                                    
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
                        <a href="../views/homepage.php" class="navListButton navActive">
                            <div class="test">
                                <i class="fa-solid fa-house"></i>
                                <p>Accueil</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./profil.php" class="navListButton">
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
            
            <!-- <div class="navSettings">
                <i class="fa-solid fa-gear"></i>
            </div> -->

        </header>

        <main>

            <div class="mainFlex">

                <div class="mainFeed">
                    <div class="mainHome">
                        <h1>Accueil</h1>
                        <!-- <i class="fa-brands fa-twitter"></i> -->

                        <div class="navMain">
                            <nav>
                                <ul>
                                    <li><a href="#">Pour vous</a></li>
                                    <li><a href="#">Abonnementrs</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                          
                    <div class="tweet">

                        <div class="tweetProfil">

                            <!-- <a href="./profil.php">
                                <img src="../views/images/user.png" alt="">
                            </a>
                            <input type="text" name="" id="" placeholder="Quoi de neuf ?"> -->

                            <!-- <a href="./profil.php">
                                <img src="../views/images/user.png" alt="">
                            </a> -->

                            <div id="tweeter">

                                <form method="post">

                                    <div class="tweetProfilMessage"></div>
                                    <a href="./profil.php">
                                        <?php
                                           echo '<img class="avatarTweetA" src="'.$_SESSION['avatar'].'">';
                                        ?>
                                    </a>
                                    <a href=""></a>
                                    
                                    <!-- <input name="message" id="" cols="30" rows="5" placeholder="Quoi de neuf ?"> -->
                                    <textarea name="message" id="areaTexte" placeholder="Quoi de neuf ?"></textarea>

                                    <div class="tweetDetails">

                                        <ul class="tweetIcons">
                                            <li><i class="fa-regular fa-image"></i></li>
                                            <li><i class="fa-regular fa-face-smile"></i></li>
                                            <li><i class="fa-regular fa-calendar"></i></li>
                                            <li><i class="fa-solid fa-location-dot"></i></li>
                                        </ul>

                                        <button type="submit" name="submit">Tweeter</button>

                                    </div>

                                </form>

                            </div>

                        </div>

                        <!-- <div class="tweetDetails">

                            <ul class="tweetIcons">
                                <li><i class="fa-regular fa-image"></i></li>
                                <li><i class="fa-regular fa-face-smile"></i></li>
                                <li><i class="fa-regular fa-calendar"></i></li>
                                <li><i class="fa-solid fa-location-dot"></i></li>
                            </ul>

                            <button>Tweeter</button>

                        </div> -->

                    </div>

                    <?php
                        include('../models/afficher_tweet.php');
                    ?>


                    <!-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ex totam eius, laboriosam doloribus odio eveniet praesentium perferendis dolores autem, quas molestiae ipsa, ea dolorem consequuntur eos. Dicta, sapiente deserunt cumque alias eligendi repellat a consequuntur. Beatae maiores architecto atque illo nulla, explicabo sapiente. Voluptatum iusto iure fuga ipsam impedit facilis quisquam tenetur magni rerum eaque voluptatem tempore exercitationem rem, voluptate inventore! Commodi placeat impedit eaque eum eveniet illum, quia itaque? Alias iusto repudiandae nam, laudantium maiores quidem eum quo possimus. Fuga, reiciendis soluta, consequuntur laborum mollitia id alias architecto deserunt iusto possimus pariatur voluptatum at cum non voluptates quod.</h1>
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ex totam eius, laboriosam doloribus odio eveniet praesentium perferendis dolores autem, quas molestiae ipsa, ea dolorem consequuntur eos. Dicta, sapiente deserunt cumque alias eligendi repellat a consequuntur. Beatae maiores architecto atque illo nulla, explicabo sapiente. Voluptatum iusto iure fuga ipsam impedit facilis quisquam tenetur magni rerum eaque voluptatem tempore exercitationem rem, voluptate inventore! Commodi placeat impedit eaque eum eveniet illum, quia itaque? Alias iusto repudiandae nam, laudantium maiores quidem eum quo possimus. Fuga, reiciendis soluta, consequuntur laborum mollitia id alias architecto deserunt iusto possimus pariatur voluptatum at cum non voluptates quod.</h1>
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ex totam eius, laboriosam doloribus odio eveniet praesentium perferendis dolores autem, quas molestiae ipsa, ea dolorem consequuntur eos. Dicta, sapiente deserunt cumque alias eligendi repellat a consequuntur. Beatae maiores architecto atque illo nulla, explicabo sapiente. Voluptatum iusto iure fuga ipsam impedit facilis quisquam tenetur magni rerum eaque voluptatem tempore exercitationem rem, voluptate inventore! Commodi placeat impedit eaque eum eveniet illum, quia itaque? Alias iusto repudiandae nam, laudantium maiores quidem eum quo possimus. Fuga, reiciendis soluta, consequuntur laborum mollitia id alias architecto deserunt iusto possimus pariatur voluptatum at cum non voluptates quod.</h1>
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ex totam eius, laboriosam doloribus odio eveniet praesentium perferendis dolores autem, quas molestiae ipsa, ea dolorem consequuntur eos. Dicta, sapiente deserunt cumque alias eligendi repellat a consequuntur. Beatae maiores architecto atque illo nulla, explicabo sapiente. Voluptatum iusto iure fuga ipsam impedit facilis quisquam tenetur magni rerum eaque voluptatem tempore exercitationem rem, voluptate inventore! Commodi placeat impedit eaque eum eveniet illum, quia itaque? Alias iusto repudiandae nam, laudantium maiores quidem eum quo possimus. Fuga, reiciendis soluta, consequuntur laborum mollitia id alias architecto deserunt iusto possimus pariatur voluptatum at cum non voluptates quod.</h1> -->


                </div>


                <div class="sideFeed">
                    
                    <form class="rechercheUsers" method="post">
                        <div class="inputUsers">

                            <i class="fa-sharp fa-solid fa-magnifying-glass hey"></i>
                            <input type="text" placeholder="rechercher">
                        </div>
                    </form> 
                    <div class="sectionUsers">
                        <?php
                            include('../models/aff_users.php');
                        ?>
                    </div>                   
                                
                </div>


            </div>

        </main>
        <button></button>

       
        
    </div>

    <!-- <script class="srcJS" src="../views/js/script.js"></script> -->
    <script src="https://kit.fontawesome.com/c1851b7f39.js" crossorigin="anonymous"></script>
</body>
</html>

                        