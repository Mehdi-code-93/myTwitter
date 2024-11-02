<!-- ============= Afficher message ==============  -->
<?php

// ======== mon id ========
$my_id = $_SESSION['id'];
// $id_receveur : recuperer dans form_msg.php


// ======== Selectionne tout les message de Moi et de la personne séléctionnée ========
$msg = $database->prepare("SELECT * FROM  private_message JOIN users ON id_sender = users.id WHERE (id_sender LIKE '$my_id' AND id_receiver LIKE '$id_receveur') OR (id_sender LIKE '$id_receveur' AND id_receiver LIKE '$my_id') ORDER BY date_send ASC");
$msg->execute();


// ======== affiche tout les resultats de la requette ========
foreach ($msg as $msgs) {

    // ======== mes Message ========
    if ($msgs['id'] == $_SESSION['id']) {

        echo '<div>'.
                '<div class="msgBlok">'.     
                    '<div class="msgBloks">'.     
                        '<p class="myMsg">'. htmlspecialchars($msgs['message']) .'<p>'.
                        '<p class="infoMsg">@moi</p>'.
                        '<p class="infoMsg">'. htmlspecialchars($msgs['date_send']) .'</p>'.
                    '</div>'.
                '</div>'.
            '</div>';
    }
    else{

    // ======== Message de l'autre personne ========
        echo '<div>'.
                '<div class="msgBlok2">'.     
                    '<div class="msgBloks2">'.     
                        '<p class="hisMsg">'. htmlspecialchars($msgs['message']) .'<p>'.
                        '<p class="infoMsg">'.'@'. $msgs['username'] .'</p>'.
                        '<p class="infoMsg">'. htmlspecialchars($msgs['date_send']) .'</p>'.
                    '</div>'.
                '</div>'.
            '</div>';
    }
}

?>