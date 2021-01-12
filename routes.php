<?php

    if(!isset($_GET['p']) || empty($_GET['p'])) {
        header("Location: ?p=home");
    }

    
    
    if($_GET['p'] == "home")
        include_once('pages/home.php');

<<<<<<< HEAD
    elseif($_GET['p'] == "aleatoire")
        include_once('pages/aleatoire.php');

    elseif($_GET['p'] == "submission")
        include_once('pages/submission.php');

    elseif($_GET['p'] == "apropos")
=======
    if($_GET['p'] == "aleatoire")
        include_once('pages/aleatoire.php');

    if($_GET['p'] == "submission")
        include_once('pages/submission.php');

    if($_GET['p'] == "apropos")
>>>>>>> 190a356ea83c133363a27028dec47564fd36766f
        include_once('pages/apropos.php');
    


?>