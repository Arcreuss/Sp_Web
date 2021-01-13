<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="filtre.css">
  <title>filtre texte</title>
</head>

<body>
  <form id="filtre" method="post" action="filtre.php">
    <p>
      <label for="longueur">Référencement des articles par longueur :</label>
      <select name="longueur" id="longueur" value="<?PHP if (isset($_POST['longueur'])) echo $_POST['longueur']; ?>">
        <?php
        $longueur = array(
          "Par défaut", "Du plus grand au plus petit",
          "Du plus petit au plus grand"
          
        );
        $i=0;
        foreach ($longueur as $choix) {
          echo "<option value=\"$i\"  ";
          if (isset($_POST['choix']) && $_POST['choix'] == "$i")
            echo " selected ";
          echo "  >$choix</option> ";
          $i++;
        }
        ?>
      </select>
      <input type="submit" name="appliquer" id="appliquer" value="Appliquer">
    </p>

    <p>
    <?PHP
      if (!empty($_POST)) {
        include_once("traitement-filtre.php");
      }
      ?>
    </p>
  </form>

</body>

</html>