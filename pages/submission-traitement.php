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
if ( empty($_POST['pseudo']))
{
$ok = false;
echo "<span class='alerte'>peuso non renseigné </span> <br/>";
}
if ( empty($_POST['mail']))
{
$ok = false;
echo "<span class='alerte'>mail non renseigné </span> <br/>";
}
if ( empty($_POST['titre']))
{
$ok = false;
echo "<span class='alerte'>titre de la théorie non renseigné </span> <br/>";
}
if ( $ok)
{
echo "Résumé des infos saisies :<br/>";
if ( isset ($_POST['form']))
{
if ($_POST['form'] == 'C')
echo "Merci du conseil , notre équipe prendras le temps d'en prendre conscience !<br/>";
else if ($_POST['form'] == 'T')
echo "Notre équipe a enregistré votre théorie : ".$_POST['titre'] ." , et la modereras !.<br/>";
else if ($_POST['form'] == 'A')
echo "Votre demande seras modéré au plus vite !.<br/>";
}
echo "Votre pseudo est succulent ".$_POST['pseudo'] ."<br/>";
echo "Nous vous notifierons d'un mail sur : ".$_POST['mail'] ." pour vous confirmer que votre demande a été traité !  <br/>";
$notes = array(0=> "très mauvaise", 10=> "pas au top", 20=>"moyenne" , 30=> "bonne", 40 =>
"succulent");
echo " Merci pour votre note de : ".$_POST['note'] ."/40 ! " ;
echo "<br/>";
if ( !isset($_POST['type'] ))
echo " Vous n'avez pas de type de théorie préféré? :o .";
else
{
echo " Vous aimez :";
foreach ( $_POST['types'] as $type )
echo $type." ";
}
}
if  ($ok)
 { 
     $file =fopen("users.txt","a");
     if (! $file)
        die ( "pb avec le fichier users.txt");
     fwrite ($file,"Pseudo : $pseudo \n Mail : $mail \n Type :$form\n Lien Illustration : $url\n Description Image : $desc \n Titre de la théorie : $titre  \n   Texte : $prop \n________________________________");
     fclose($file);  

     $file =fopen("data.csv","a");
     if (! $file)
        die ( "pb avec le fichier data.csv");
     fwrite ($file,"\n$lignesauvegarder");
     fclose($file);  
}
?>
