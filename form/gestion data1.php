<?php  
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
?>
