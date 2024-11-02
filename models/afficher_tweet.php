<!-- ============= Affiche Les Tweets ==============  -->
<?php

if (isset($_POST['submit'])) {
    $tweet = $_POST['message'];
}

// ======== Selectionne tout les Tweets ========
$tweets = $database->prepare("SELECT * FROM tweet JOIN users WHERE id_user LIKE users.id ORDER BY date_send DESC");
$tweets->execute();


// ======== affiche tout les resultats de la requette ========
foreach ($tweets as $tweet) {     
         
    echo '<div class="boxTweete">'.
            '<div class="tweetBlok">'.     
                '<img class="avatarTweet" src="'.$tweet['avatar'].'">'.
                '<p>'. $tweet['name'] .'</p>'.
                '<p>'.'@'. $tweet['username'] .'</p>'.
                '<p>'. htmlspecialchars($tweet['date_send']) .'</p>'.
            '</div>'.
                '<p class="msg">'. htmlspecialchars($tweet['message']) .'<p>'.
        '<div class="tweetBlok">'.     
            '<form class="msgTweeet" action="../models/like.php" method="get">
                <input class="id_users" type="number" name="id" value="'.$tweet['id'].'">
                <input class="btnLikes" type="submit" value="">
            </form>'.
            

        // form qui recupere l'id et l'username du Users et qui l'envoie a "form_msg.php"
            '<form class="msgTweeet" action="../views/form_msg.php" method="get">
                <input class="id_users" type="number" name="id" value="'.$tweet['id'].'">
                <input class="id_users" type="" name="username" value="'.$tweet['username'].'">
                <input class="btnSuivre" type="submit" value="Message">
            </form>'.
        '</div>'.
        '</div>';

}

?>