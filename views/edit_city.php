<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    
    session_start();
    if(empty($_SESSION)) 
    { 
        
        exit;
    }
    else{
       
        include "../models/root.php";
    
   
    }


if (!empty($_GET)) {

  
   
        extract($_GET);
        $valid = true;
    
        if (isset($_GET['submit'])) {

           
    
           
            $city = (String) (trim($city));
            
    
            if (empty($city)) {
            
                $valid = false;
                $error_message = "veuillez renseigner ce champs";
                

            }

           
            if ($valid) {
                
                
                $id = $_SESSION['id'];

                $requette = $database->prepare("UPDATE users SET city = '$city'  WHERE id = '$id'");
                $requette->execute();
                 
            }
        
        }
}


?>

<form action="" method="get" class="form">

<div class="form">
            <label for="city">Modifiez votre ville </label>
            <input type="text" name="city" id="city" >
</div>

<div class="form">
            <button type="submit" name="submit">Envoyer</button>
</div>

</form>
    
 
</body>
</html>