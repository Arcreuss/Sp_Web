<div class="article">
    <?php
    include_once("gestion data1.php")
    ?>

    <div class="TopArticle">
        <p>
            <h1 id="TitreArticle"><?PHP echo $titre ?></h1>
            <?PHP echo $auteur . ", le " . $datePublication ?>
        </p>
        
    </div>

    <?PHP echo  "<img class='imgArticle' src=$lienImage alt=$comImage>" ?>


    <p id="ParaArticle">
        <?PHP
        foreach ($paragraphe as $texte) {
            echo $texte;
        }
        echo "<br/> </br>";

        foreach ($source as $sr) {
            echo "source: " . $sr;
        }
        ?>
    </p>


</div>