<title>Home</title>

Home a été lancé


</div>
<!DOCTYPE html>
<html>
<head>
<style>

.myDiv {
  border: 5px outset red;
  background-color: black;    
  text-align: left;
  width: 20%;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
  font-size: 25px;
  overflow-wrap: break-word
}

.myDiv h2 {
  height: calc(300px - 7vw);
}

.text-intro {
  height: calc(3150px - 150vw);
}

#my1Div {
  margin-left: 10%;
  margin-top:150px;
}

#my2Div {
  margin-left: 50px;
  margin-top:150px;
}

#my3Div {
  margin-left: 50px;
  margin-top:150px;
}

#my4Div {
  margin-left: 10%;
  margin-top: 10px;
}

#my5Div {
  margin-left: 50px;
  margin-top: 50px;
}

#my6Div {
  margin-left: 50px;
  margin-top: 50px;
}


.glow-on-hover {
    width: 250px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    margin-bottom: 20px;
    margin-left: 100px;
    z-index: 0;
    border-radius: 10px;
    font-size: 25px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

h1 :not(.title){
  font-size: 40px;
}
</style>
</head>
<body>

<h1>Les populaires du moment :</h1>

<div class="myDiv" id="my1Div">
  <h2>"L'Apocalypse" 5G</h2>
  <p class="text-intro">Une Nouvelle technologie a vus le jour récemment et il s'agit de la 5G! Il succède à la 4G et promet un accès à des débits bien meilleurs et bien plus performants de ceux de cette dernière avec des latences presques innexistantes et connexion rapide n'importe ou! Mais la provenance et les conséquences de cette nouvelle technologie est d'après certains très peu fiable et extremement dangereuse...</p>
  <p>la Date , l'auteur etc</p>
  <button class="glow-on-hover" type="button" onclick="window.location.href='http://iutannecy-deptinfo.fr/m1106/Quee/?p=l%27apocalypse-5g';">Cliquez ici Pour Lire !</button>
</div>

<div class="myDiv" id="my2Div">
  <h2>Un Virus aux origines vagues ?</h2>
  <p class="text-intro">Le Covid-19 cache de nombreux mystères dont sa provenance qui n'a jamais été réellement prouvé encore aujourd'hui ! Provient-il de l'ingération d'une chauve-souris? D'un autre animal ? Personne ne sait et pourtant de plus en plus de personnes pensent que l'envers du décors est bien plus effreyante...</p>
  <p>la Date , l'auteur etc</p>
  <button class="glow-on-hover" type="button">Cliquez ici pour Lire !</button>
</div>

<div class="myDiv" id="my3Div">
  <h2>Un Vaccin particulier</h2>
  <p class="text-intro">Récémment le vaccin Pfizer-BioNTech qui permet de combattre cette pathologie meurtrière qu'est le Covid-19 à été approuvé et commence déjà à être administré. Tandis que les états du monde le recommande pour combattre cette épidémie , une grande majorité s'oppose à cette vaccination pour différents motifs . La plus populaire d'entre elle? le fait que le vaccin contiendrais une puce assez spéciale... </p>
  <p>la Date , l'auteur etc</p>
  <button class="glow-on-hover" type="button">Cliquez ici pour Lire !</button>
</div>

<div class="myDiv" id="my4Div">
  <h2>Le Voleur du Capitol</h2>
  <p class="text-intro">Suite aux tragiques évenements du Capitol à quelques jours de la fin de la présidence de Trump , de nombreuses dégradations et vols ont étés commis dans l'édifice le plus emblématique de la démocratie américaine . Que ce soit des objets de valeurs, des meubles ou encore meme des disque dur qui d'après certains médias aurait mener leurs voleur à une mort tragique...</p>
  <p>la Date , l'auteur etc</p>
  <button class="glow-on-hover" type="button">Cliquez ici pour Lire !</button>
</div>

<div class="myDiv" id="my5Div">
  <h2>Un Imposteur parmis les enseignants ?</h2>
  <p class="text-intro">Madame Grazziano plus connus pour être une enseignante de Communication ou celle detenant un des meilleurs score au projet voltaire semble être une personne tout a fait normale et innocente de tout soupçon mais depuis la découverte d'une certaines images sur le réseaux social discord elle est suspecté de jouer un rôle et d'être en réalité un tout autre personnage bien particulier... </p>
  <p>la Date , l'auteur etc</p>
  <button class="glow-on-hover" type="button"onclick="window.location.href='http://iutannecy-deptinfo.fr/m1106/Quee/?p=un-imposteur-parmi-les-enseignants-?';">Cliquez ici pour Lire !</button>
</div>

<div class="myDiv" id="my6Div">
  <h2>Des Attentats prémédités ?</h2>
  <p class="text-intro">Le Monde entier à été victime d'attentats terroristes , c'est indéniable .Ces tragiques evenements ne pouvant être oublié a cause de leurs impact sur notre mode de vie et nos traditions étaient perpétré pour d'après les média nuire aux libertés des individus. Mais de cette crainte en née de nouvelles et plus particulièrement une qui suppose que les auteurs de ces attentats sont plus proches de nous que ce que nous pensons...</p>
  <p>la Date , l'auteur etc</p>
  <button class="glow-on-hover" type="button">Cliquez ici pour Lire !</button>
</div>


</body>
</html>
