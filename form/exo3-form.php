<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Formulaire</title>
<link rel="stylesheet" href="exo3-form.css"/>
<!-- décommenter pour inclure du javascript <script src="script.js"></script> -->
</head>
<body>
<h1>Formulaire Théorie</h1>
<form id="exo3" method="post" action="exo3-form.php" >
<div>
<fieldset>
<legend>Propositions</legend>
<p class="choix"> <label>Que voulez vous nous partager ?</label>

<input type="radio" name="form" value="C"
id="conseil" <?PHP if (isset ( $_POST['form' ]) && $_POST['form' ]=='C') echo "checked" ;
?>/>
<label for="conseil">Conseil</label>

<input type="radio" name="form" value="T"
id="theorie" <?PHP if (isset ( $_POST['form' ]) && $_POST['form' ]=='T') echo "checked" ;
?> />
<label for="theorie">Théorie</label>

<input type="radio" name="form" value="A"
id="autre" <?PHP if (isset ( $_POST['form' ]) && $_POST['form']=='A') echo "checked" ;
?> />
<label for="autre">Autres</label>

</p>
<p>
<label for="pseudo">Pseudo :</label> <strong><abbr title="required">*</abbr></strong>
<input type="text" name="pseudo" id="pseudo" size="30"
maxlength="10" <?PHP if (isset ( $_POST['pseudo' ])) { $pseudo =
$_POST['pseudo' ]; echo "value =\"$pseudo\""; } ?> /></p>

<p>
<label for="mail">Mail :</label> <strong><abbr title="required">*</abbr></strong>
<input type="email" name="mail" id="mail"
size="30" <?PHP if (isset ( $_POST['mail' ])) { $mail = $_POST['mail' ]; echo "value
=\"$mail\""; } ?> />
</p>

<p>
<label for="titre">Titre :</label> <strong><abbr title="required">*</abbr></strong>
<input type="text" name="titre" id="titre" size="30"
maxlength="10" <?PHP if (isset ( $_POST['titre' ])) { $titre =
$_POST['titre' ]; echo "value =\"$titre\""; } ?> /></p>
</p>

<p>
<label for="url">Lien d'une illustration?</label>
<input type="url" name="url" id="url"
       placeholder="https://example.com"
       pattern="https://.*" size="30"
maxlength="40" <?PHP if (isset ( $_POST['url' ])) { $url =
$_POST['url' ]; echo "value =\"$url\""; } ?> /></p>
</p>

</select>
</p>
<p>
<label for="desc"> Une petite description de l'image ?</label> <br />
<textarea name="desc" id="desc" rows="5" cols="30">
<?PHP if (isset ( $_POST['desc' ])) { $adresse = $_POST['desc' ];
echo "$desc"; } 
?>
</textarea>
</p>

<p>
<label for="prop"> Proposition : ( tirez la fenetre dans le coin bas droite pour l'aggrandir )</label> <br />
<textarea name="prop" id="prop" rows="5" cols="30">
<?PHP if (isset ( $_POST['prop' ])) { $adresse = $_POST['prop' ];
echo "$prop"; } 
?>
</textarea>
</p>
</fieldset>
<fieldset>
<legend>Infos autres</legend>
<p>
<label for="note">Notez notre site :</label>
<input type="range" name="note" min="0" max="40" step="10" id="selec"
<?PHP if (isset ( $_POST['note' ])) { $notes = $_POST['note' ]; echo "value =\"$notes\""; }
else echo "value=\"0\" "; ?>
/>
</p>
<p>
<label for="nb">Votre age? :</label>
<input type="number" name="nb" id="nb"
<?PHP if (isset ( $_POST['nb' ])) { $nb = $_POST['nb' ]; echo "value =\"$nb\""; } ?>
/>
</p>
<p class="choix">
Types :<br />
<?PHP
$lestypes = array( "Paranormale", "Scientifiques", "Complotistes", "Autres" );
foreach ( $lestypes as $type )
{ echo "<input type=\"checkbox\" name=\"types[]\" id=\"$type\"
value=\"$type\" ";
if (isset ( $_POST['sports' ]) && in_array($type,$_POST['types' ])) echo "checked" ;
echo "/> <label for=\"$type\">$type</label><br />" ;
}
?>
</p>
</fieldset>
</div><div>
<input type="submit" name="valider" id="valider" value="Envoyer"/></div>
<p>
<?PHP
if (! empty( $_POST))
{
include_once("exo3-treat.php");
}

?>
</p>
</form>
</body>
</html>