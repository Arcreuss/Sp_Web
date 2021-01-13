<?PHP
/*
echo "nb de cases: ". count($_POST) ."<br/>";
print_r($_POST); */

$prop = $_POST['prop'];
$form = $_POST['form'];
$mail = $_POST['mail'];
$titre= $_POST['titre'];
$desc = $_POST['desc'];
$ok = true;

if ($_POST['valider']!='Envoyer') {
    $ok=false;
}

if ($ok) {
    # code...
    $_POST['prop']=preg_replace("/\n/","¬", $_POST['prop']);

    $_POST['titre']=preg_replace("/ /","-", $_POST['titre']);
    $_POST['titre']=strtolower($_POST['titre']);

    $lignesauvegarder=$_POST['titre'].';'.date('d-m-y').';'.$_POST['pseudo'].';'.$_POST['url'].';'.$_POST['desc'].';'.$_POST['prop'].';#source;';
        			$i=0;
    while (array_key_exists("nomSource$i",$_POST)) {
        $lignesauvegarder.=$_POST["nomSource$i"].";".$_POST["lienSource$i"].";";
        $i++;
    }
    $lignesauvegarder.="#commentaire";
}

if ($ok){ 
     $file =fopen("users.txt","a");
     if (! $file)
        die ( "pb avec le fichier users.txt");

     fwrite ($file,"Pseudo : $pseudo \n Mail : $mail \n Type :$form\n Lien Illustration : $url\n Description Image : $desc \n Titre de la théorie : $titre  \n   Texte : $prop \n________________________________");
     fclose($file);  

     $file =fopen("data.csv","a");
     if (! $file){
        die ( "pb avec le fichier data.csv");}
     fwrite ($file,"\n$lignesauvegarder");
     fclose($file);  

    header("Location: ?p=home");
        $_GET['p']= "home";

        echo "Article envoyer avec succès";

    include_once('pages/home.php');
    include_once('body.php');
    include_once('footer.php');
    die ("");
}
?>
