<title>Home</title>

Home a été lancé

<div class="articleBox">
    <?php
    include_once("gestion data1.php");
    $i=0;
    while($i!=$taille){
        echo "<div class='AllBoxArticle'>";
        echo "<img class='imgBoxArticle' src=$lienImage alt=$comImage>";
        echo "<p> <h1 id='TitreArticle'>";
        echo "$titre </h1>";
        echo "$auteur, le$datePublication </p>";
        echo "</div>";
        $i++;

    }
    
    ?>

</div>