<?php

    if(!isset($_GET['p']) || empty($_GET['p'])) {
        header("Location: ?p=home");
    }

    
    
    if($_GET['p'] == "home")
        include_once('pages/home.php');

    elseif($_GET['p'] == "aleatoire")
        include_once('pages/aleatoire.php');

    elseif($_GET['p'] == "submission")
        include_once('pages/submission.php');

    elseif($_GET['p'] == "apropos")
        include_once('pages/apropos.php');
    


?>