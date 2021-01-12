<?php

    if(!isset($_GET['p']) || empty($_GET['p'])) {
        header("Location: ?p=home");
        $_GET['p']= "home";
    }

    $file=fopen("data.csv", "r");

    $article=array();
    $i=0;
    while (!feof($file)) {
        $ligne=fgetcsv($file,0,";");
        if($_GET['p']==$ligne[0]){
            $article=$ligne;
        }   

    }
    fclose($file);
    $taille=count($article);
    if($taille!=0){
        $titre=$article[0];
        $datePublication=$article[1];
        $auteur=$article[2];
        $lienImage=$article[3];
        $comImage=$article[4];

        $paragraphe=array();
        $source=array();
        $commentaire=array();

        
        $paragraphe=str_getcsv($_POST['paragraphe'],"¬");
        $i=6;
        while($article[$i]!="#commentaire" && $i<=$taille){
            $source[$article[$i]]=$article[$i+1];
            $i+=2;
        }
        $i++;
        while($i<$taille){
            $commentaire[]=array('username' => $article[$i],'date' => $article[$i+1],'commentaire' => $article[$i+2]);
            $i+=3;

        }

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