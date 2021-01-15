<?php

    if(!isset($_GET['p']) || empty($_GET['p'])) {
        header("Location: ?p=home");
        $_GET['p']= "home";
    }

    $file=fopen("data.csv", "r");

    $article=array();
    $toutLesArticles=array();
    $i=0;
    $idArticle=0;
    while (!feof($file)) {
        $ligne=fgetcsv($file,0,";");

        if(count($ligne)>2){

            $toutLesArticles[]=$ligne;

            if($_GET['p']==$ligne[0]){
                $article=$ligne;
                $idArticle=$i;
            }
        }
        $i++;
    }
    fclose($file);
    $taille=count($article);


    if($taille!=0){
        include_once('gestion data1.php');
        include_once('article.php');
    }
    elseif($_GET['p'] == "home")
        include_once('pages/home.php');

    elseif($_GET['p'] == "aleatoire")
        include_once('pages/aleatoire.php');

    elseif($_GET['p'] == "submission")
        include_once('pages/submission.php');

    elseif($_GET['p'] == "apropos")
        include_once('pages/apropos.php');
    
    else
    include_once('pages/home.php');


?>