<?php 


	$file=fopen("data.csv", "r");

	$page=array();
	$i=0;
	while (!feof($file)) {
		$ligne=fgetcsv($file,0,";");
		if (count($ligne)>2){
			$page[]=$ligne;
		}
	}
	fclose($file);

	$article=$page[rand (0,count($page)-1)];

	include_once('gestion data1.php');

	$localisation=$article[0];

	header("Location: ?p=$localisation");
    $_GET['p']= "$localisation";

	


 ?>