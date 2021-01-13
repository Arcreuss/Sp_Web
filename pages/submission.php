<!doctype html>
    <?PHP
    if (! empty( $_POST))
    {
        include_once("submission-traitement.php");
    }

    ?>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Formulaire</title>
<link rel="stylesheet" href="submission-style.css"/>
<!-- décommenter pour inclure du javascript <script src="script.js"></script> -->
</head>
<body>
<h1>Formulaire Théorie</h1>
<form id="sub" method="post" action="">
<div>
    <fieldset>
    <legend>Votre article</legend>
    
    <p>
        <label for="pseudo">Pseudo :</label> <strong><abbr title="required">*</abbr></strong>
        <input required type="text" name="pseudo" id="pseudo" size="30"
        maxlength="10" <?PHP if (isset ( $_POST['pseudo' ])) { $pseudo =
        $_POST['pseudo' ]; echo "value =\"$pseudo\""; } ?> />
    </p>

    <p>
    <label for="mail">Mail :</label> <strong><abbr title="required">*</abbr></strong>
    <input required type="email" name="mail" id="mail"
    size="30" <?PHP if (isset ( $_POST['mail' ])) { $mail = $_POST['mail' ]; echo "value
    =\"$mail\""; } ?> />
    </p>

    <p>
    <label for="titre">Titre :</label> <strong><abbr title="required">*</abbr></strong>
    <input required type="text" name="titre" id="titre" size="30"
    maxlength="50" <?PHP if (isset ( $_POST['titre' ])) { $titre =
    $_POST['titre' ]; echo "value =\"$titre\""; } ?> /></p>
    </p>

    <p>
    <label for="url">Image d'illustration</label>
    <input type="url" name="url" id="url"
           placeholder="https://images.unsplash.com/"
           pattern="https://images.unsplash.com/.*" size="30" <?PHP if (isset ( $_POST['url' ])) { $url =
    $_POST['url' ]; echo "value =\"$url\""; } ?> /></p>
    </p>

    </select>
    </p>
    <p>
    <label for="desc">Description de l'image</label> <br />
    <textarea name="desc" id="desc" rows="5" cols="30">
<?PHP if (isset ( $_POST['desc' ])) { echo $_POST['desc'];} 
    ?></textarea>
    </p>

    <p>
    <label for="prop"> Contenu de l'article</label> <br />
    <textarea required name="prop" id="prop" rows="50" cols="100">
<?PHP if (isset ( $_POST['prop'])) { echo $_POST['prop'];} ?></textarea>
    <?php 
                    for($i=0;$i<$_POST['+']+1;$i++){
                        echo '<p>';
                        echo "<label for=\"nomSource$i\">Nom de la source</label>";

                        echo "<input";
                        if (isset ( $_POST["nomSource$i" ])) { 
                            $nom =$_POST["nomSource$i" ]; 
                        echo " value =\"$nom\" ";}
                        echo" type=\"text\" name=\"nomSource$i\" id=\"nomSource$i\">";

                        echo "<label for=\"lienSource$i\">Lien de la source</label>";

                        echo "<input";
                        if (isset ( $_POST["lienSource$i"])) { 
                            $lien =$_POST["lienSource$i"]; 
                        echo " value =\"$lien\" ";}
                        echo "  type=\"url\" name=\"lienSource$i\" id=\"lienSource$i\">";
                    }

                        $plus=$_POST['+']+1;
                    echo "<button type=\"submit\" name=\"+\" value=\"$plus\">+</button>";

                    
                    if($_POST['+']>0){
                        $plus=$_POST['+']-1;
                        echo "<button type=\"submit\" name=\"+\" value=\"$plus\">-</button>";
                    }
                    echo '</p>';
                ?>
    </fieldset>
<div>
    <input type="submit" name="valider" id="valider" value="Envoyer"/>
</div>
<p>

</p>
</form>
</body>
</html>
