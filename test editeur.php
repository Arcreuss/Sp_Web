<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
		<p>
			<label for="username">Nom d'utilisateur</label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label for="titre">Titre de la théorie</label>
			<input type="text" name="titre" id="titre">
		</p>
		<p>
			<label for="image">lien image d'illustration</label>
			<input type="text" name="image" id="image">
		</p>
		<p>
			<label for="descImage">Description de l'image</label>
			<input type="text" name="descImage" id="descImage">
		</p>
		<p>Texte</p>
		<?php 

				echo '<p>';
				echo "<textarea name=\"paragraphe$i\" rows=\"12\" cols=\"70\" ></textarea>";
				echo '</p>';
			
		?>
			<?php 
				for($i=0;$i<$_POST['+']+1;$i++){
					echo '<p>';
					echo "<label for=\"nomSource$i\">Nom de la source</label>";

					echo "<input type=\"text\" name=\"nomSource$i\" id=\"nomSource$i\">";

					echo "<label for=\"lienSource$i\">Lien de la source</label>";

					echo "<input type=\"text\" name=\"lienSource$i\" id=\"lienSource$i\">";
				}

					$plus=$_POST['+']+1;
				echo "<button type=\"submit\" name=\"+\" value=\"$plus\">+</button>";

				
				if($_POST['+']>0){
					$plus=$_POST['+']-1;
					echo "<button type=\"submit\" name=\"+\" value=\"$plus\">-</button>";
				}
				echo '</p>';
			?>
		<p>
			<?php
				echo "<button type=\"submit\">Envoyer</button>";
			?>

		</p>

		<?php 
			$paragraphe=str_getcsv($_POST['paragraphe'],"\n");

			$lignesauvegarder=$_POST['titre'].';'.date('d-m-y').';'.$_POST['username'].';'.$_POST['image'].';'.$_POST['descImage'].';'.$_POST['paragraphe'].';#source;';
			$i=0;
			while (array_key_exists("nomSource$i",$_POST)) {
				$lignesauvegarder.=$_POST["nomSource$i"].";".$_POST["lienSource$i"].";";
				$i++;
			}
			$lignesauvegarder.="#commentaire";
			echo $lignesauvegarder;


		?>
	</form>
</body>
</html>