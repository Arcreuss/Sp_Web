<title>Home</title>
<!DOCTYPE html>
<html>
<head>
<style>



.cadre-article h2 {
  height: calc(20px - 7vw);
}

.cadre-article{
  width: 80%;
  border: 5px outset red;
  background-color: black;    
  text-align: left;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
  font-size: 20px;
  overflow-wrap: break-word;
  margin-bottom: 20px;
}


.text-intro {
  height: calc(200px - 5vw);
  margin-bottom: 10px;
}



.glow-on-hover {
    width: 20vw;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    margin-bottom: 20px;
    margin-left: 50vw;
    z-index: 0;
    border-radius: 10px;
    font-size: 25px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

@media only screen and (max-width: 1300px) {
  nav.menu-nav {
    font-size: 12px;
    width: 180px;
  }

  
}

/*@media only screen and (max-width: 900px) {
  .myDiv {
    font-size: 18px;
  }

  .text-intro {
  height: calc(1450px - 5vw);
  text-align: center;
  }
}*/

h1 :not(.title){
  font-size: 40px;
}
</style>
</head>
<body>

<h1>Les populaires du moment :</h1>

<?php 
  foreach ($toutLesArticles as $key => $value) {
    $article=$value;
    $urlArticle=$value[0];
    
      $taille=count($article);
      if($taille!=0){
        $titre=$article[0];

        $titre=preg_replace("/-/"," ", $titre);
        $titre[0]=strtoupper($titre[0]);

        $datePublication=$article[1];
        $auteur=$article[2];
        $lienImage=$article[3];
        $comImage=$article[4];

        $paragraphe=array();
        $source=array();
        $commentaire=array();

        
        $paragraphe=str_getcsv($article[5],"¬");
        foreach ($paragraphe as $key => $value) {
          if($key!='0')
          $paragraphe[$key][0]=' ';
        }
        $i=7;
        while($article[$i]!="#commentaire" && $i<=$taille){
          $source[$article[$i]]=$article[$i+1];
          $i+=2;
        }
        $i++;
        while($i<$taille){
          $commentaire[]=array('username' => $article[$i],'date' => $article[$i+1],'commentaire' => $article[$i+2]);
          $i+=3;
        } 
      }

    echo "<div class=\"cadre-article\" id=\"$key\">";
    echo "<h1>$titre</h1>";
    $resumer=substr($paragraphe[0], 100);

    echo "<div class=\"text-intro\">";
    echo "<p>$resumer...</p>";
    echo "<p>$datePublication, $auteur</p>";
    echo "</div>";

    echo "<button class=\"glow-on-hover\" type=\"button\" onclick=\"window.location.href='http://iutannecy-deptinfo.fr/m1106/Quee/?p=$urlArticle';\">Lire l'article </button>";
    echo "</div>";


  }
 ?>



</body>
</html>
