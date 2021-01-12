<?php  
	
	$_GET['p']="puce-dans-vaccin";

	$file=fopen("data.csv", "r");

	$article=array();
	$i=0;
	while (!feof($file)) {
		$ligne=fgetcsv($file,0,";");
		if($_GET['p']==$ligne[0]){
			$article=$ligne;
		}	

	}
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

		$i=5;
		while($article[$i]!="#source" && $i<=$taille){
			$paragraphe[]=$article[$i];
			$i++;
		}
		$i++;
		while($article[$i]!="#commentaire" && $i<=$taille){
			$source[$article[$i]]=$article[$i+1];
			$i+=2;
		}
		$i++;
		while($i<$taille){
			$commentaire[]=array('username' => $article[$i],'date' => $article[$i+1],'commentaire' => $article[$i+2]);
			$i+=3;

		}

		include_once('test.php');
	}
	fclose($file);
?>