<?php 

	$article=$toutLesArticles[rand (0,count($toutLesArticles)-1)];

	include_once('gestion data1.php');

	$localisation=$article[0];

	header("Location: ?p=$localisation");
    $_GET['p']= "$localisation";

	


 ?>