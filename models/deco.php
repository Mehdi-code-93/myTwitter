<!-- ============= Deconnexion ==============  -->
<?php

session_start();
if(isset($_SESSION)){

    session_destroy();
    session_unset();
    header('Location: /myTweet/views/form_con.php');
}

?>