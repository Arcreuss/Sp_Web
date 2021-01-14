<div class="article">
    <link rel="stylesheet" type="text/css" href="style-article.css">

    <?php

    include_once("gestion data1.php");
    ?>

    <h1 class="titreArticle"><?PHP echo $titre ?></h1>
    <div class="TopArticle">
            <img class="pp" src="https://thispersondoesnotexist.com/image" alt="photo de l'auteur">
            <?PHP echo "<p class=\"auteur-date\">$auteur, le $datePublication </p>" ?>
    </div>

    <div>
    <?PHP echo  "<img class='imgArticle' src=$lienImage alt=$comImage>" ?>
        
    </div>


    <p>
        <?PHP
        foreach ($paragraphe as $texte) {
            echo "<p class='paraArticle' >$texte</p>";
        }
        echo "<br/> </br>";

        echo "</p ><p class='sources'>Sources : ";
        foreach ($source as $key => $sr) {
            echo "<a href=\"$sr\">$key</a>";
        }
        ?>
    </p>
    <p class="formulaire-article">
        <form method="POST">
            <input type="text" name="nom" id="nom" placeholder="Nom" size="5">
            <input type="text" name="texte" id="texte" placeholder="message" size="50">
            <button type="submit" name="nouveauCom">ok</button>
        </form>
    </p>
    <p class="blockCommentaire">
      <?php 
        foreach ($commentaire as $value) {
            $user=$value['username'];
            $time=$value['date'];
            $com=$value['commentaire'];
            $alea=rand(0,3);
            echo "<section class=\"commentaire\"><p id=\"date-com\" class=\"com\">$time,</p><p id=\"nom-com\" class=\"com\">$user</p><p id=\"text-com\">$com</p></section>";
        }
       ?>  
    </p>



</div>