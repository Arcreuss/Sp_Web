<!-- haut de Page -->
	<!-- <h1>Article :</h1> -->
	<div class="centerBox">
	<?php
	include_once("article.php");
	?>

	<!-- menu de Navigation -->

	<nav class="menu-nav">
		<ul>
			<li class="btn">
				<h1 class="title">
			Menu principal
				</h1>
			</li>
			<li class="btn">
				<a href="?p=home" class="<?php if($_GET['p'] == 'home') { echo "select"; } ?>">
					 Home
				</a>
			</li>
			<li class="btn" >
				<a href="?p=aleatoire" class="<?php if($_GET['p'] == 'aleatoire') { echo "select"; } ?>">
					Aléatoire
				</a>
			</li>
			<li class="btn">
				<a href="?p=submission" class="<?php if($_GET['p'] == 'submission') { echo "select"; } ?>">
					Submission
				</a>
			</li>
			<li class="btn">
				<a href="?p=apropos" class="<?php if($_GET['p'] == 'apropos') { echo "select"; } ?>">
					A propos de nous
				</a>
            </li>
           
		</ul>
	</nav>
	