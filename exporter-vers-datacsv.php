<?php 
	$tableau=array();
	foreach ($toutLesArticles as $ligne) {
		$tableau[]=implode(";", $ligne);
	}
	$fichier=implode("\n", $tableau);
	file_put_contents("data.csv", $fichier);
	echo "ok";
 ?>