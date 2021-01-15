<title>Home</title>



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
  margin-left: 150px;
  margin-top:150px;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
}
.my2Div {
  border: 5px outset red;
  background-color: black;    
  text-align: left;
  width: 20%;
  margin-left: 50px;
  margin-top:150px;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
}
.my3Div {
  border: 5px outset red;
  background-color: black;    
  text-align: left;
  width: 20%;
  margin-left: 50px;
  margin-top:150px;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
}

.my4Div {
  border: 5px outset red;
  background-color: black;    
  text-align: left;
  width: 20%;
  margin-left: 150px;
  margin-top: 50px;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
}

.my5Div {
  border: 5px outset red;
  background-color: black;    
  text-align: left;
  width: 20%;
  margin-left: 50px;
  margin-top: 50px;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
}

.my6Div {
  border: 5px outset red;
  background-color: black;    
  text-align: left;
  width: 20%;
  margin-left: 50px;
  margin-top: 50px;
  display: inline-block;
  font-family: Verdana,Helvetica,Arial,sans-serif;
}


.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    margin-bottom: 20px;
    margin-left: 75px;
    z-index: 0;
    border-radius: 10px;
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

</style>
</head>
<body>

<h1>Les populaires du moment :</h1>

<?php 
  foreach ($toutLesArticles as $key => $value) {
    $article=$value;
  }
 ?>

<div class="myDiv">
  <h2>Le Titre</h2>
  <p>Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion Ceci est une descritpion </p>
  <p>la Date , l'auteur etc</p>
  <button class="glow-on-hover" type="button">Clique Pour Lire !</button>
</div>

</div>


</body>
</html>