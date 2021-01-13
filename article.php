<div class="article">
    <?php
    include_once("gestion data1.php")
    ?>

    <div class="TopArticle">
        <p>
            <h1 id="TitreArticle"><?PHP echo $titre ?></h1>
            <img class="pp" src="https://thispersondoesnotexist.com/image" alt="photo de l'auteur">
            <?PHP echo $auteur . ", le " . $datePublication ?>
        </p>
        
    </div>

    <?PHP echo  "<img class='imgArticle' src=$lienImage alt=$comImage>" ?>


    <p id="ParaArticle">
        <?PHP
        foreach ($paragraphe as $texte) {
            echo "<p>$texte</p>";
        }
        echo "<br/> </br>";

        echo "Sources : ";
        foreach ($source as $key => $sr) {
            echo "<a href=\"$sr\">$key</a>";
        }
        ?>
    </p>
    <p>

    </p>
    <p>
      <?php 
        foreach ($commentaire as $value) {
            $user=$value['username'];
            $time=$value['date'];
            $com=$value['commentaire'];
            $alea=rand(0,3);
            echo "<div id=\"commentaire\"><p id=\"com-temps\">$time</p><p id=\"com-username\">$user</p><p id=\"com-message\">$com</p></div>";
        }
        print_r($toutLesArticles) ;
       ?>  
    </p>



</div>