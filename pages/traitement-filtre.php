<?php
///////////////////// FONCTION TRI /////////////////////////

  //fonction tri (array textes)
  function tri($textes){
    for ($I = count($textes) - 2; $I >= 0; $I--) {
      for ($J = 0; $J <= $I; $J++) {
        if ($textes[$J + 1] < $textes[$J]) {
          $t = $textes[$J + 1];
          $textes[$J + 1] = $textes[$J];
          $textes[$J] = $t;
        }
      }
    }
    return $textes;
  }
  
//////////////////////////////////////////////////////////

  print_r($_POST);

  $nom = "textes.txt";
  $file = fopen($nom, "r");
  if ($file == false)
    die("pb d'ouverture du fichier $nom");
  echo "Ouverture OK <br/>";

  // while ( feof ( $file)){ 
  //     $textes [ ] = fgetcsv ( $file);
  // }

  while (!feof($file)) {
    $textes[] = trim(fgets($file));
  }
  fclose($file);

//   print_r($textes);
//   echo "<br/>";
//   print_r($_POST["longueur"]);
//   echo "<br/>";
  

  if (!empty($_POST["longueur"]) or $_POST["longueur"]==0){

    switch ($_POST["longueur"]) {

      case 0:
        foreach($textes as $texte)
        {
            echo "<p>".$texte."</p> <br/";
        }
        break;

      case 1:
        $court_textes=tri($textes);
        foreach($court_textes as $texte)
        {
            echo "<p>".$texte."</p> <br/";
        }
        break;

      case 2:
        $long_textes=tri($textes);
        $long_textes=array_reverse($long_textes,true);
        foreach($long_textes as $texte)
        {
            echo "<p>".$texte."</p> <br/";
        }
        break;
    }
  }
  else{
    echo "<br/> <br/> <br/>";
    echo "raté";
  }
  

  

  ?>