<?php

    if(!isset($_GET['p']) || empty($_GET['p'])) {
        header("Location: ?p=home");
    }

    
    
    if($_GET['p'] == "zebi")
        include_once('pages/zebi.php');

        if($_GET['p'] == "home")
        include_once('pages/home.php');
    

    else 
        include_once('pages/home.php');

?>