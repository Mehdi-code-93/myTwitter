<!-- ============= Affiche Les Users ==============  -->
<?php

// ======== Selectionne tout les Users ========
$theUsers = $database->prepare("SELECT * FROM users");
$theUsers->execute();

// ======== affiche tout les resultats de la requette ========
foreach ($theUsers as $theUser) {     
    echo '<div class="boxUsers">'.
            '<div class="usersBlok">'.     
                '<div class="usersBlok">'.     
                    '<img class="avatarTweet" src="'.$theUser['avatar'].'">'.
                    '<p>'.'@'. $theUser['username'] .'</p>'.
                '</div>'.

                '<div class="usersBlok">'.  
                   
                // form qui recupere l'id et l'username du Users et qui l'envoie a "form_msg.php"
                    '<form action="../views/form_msg.php" method="get">
                        <input class="id_users" type="" name="id" value="'.$theUser['id'].'">
                        <input class="id_users" type="" name="username" value="'.$theUser['username'].'">
                        <input class="btnSuivre" type="submit" value="Message">
                    </form>'.
                    '<button class="btnSuivre">suivre</button>'.
                '</div>'.
            '</div>'.
        '</div>';
}

?>