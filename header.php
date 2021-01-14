<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link rel="shortcut icon" href="icone/panneau2.ico">
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<title>Complosite</title>
</head>

<style>
.logo {
    width: 100%;
    height: 100%;
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
	margin-left: -1%;
}

.logo:before {
    content: '';
    background: linear-gradient(45deg, #011952, #002170, #002a8f, #0031a8, #0039c2, #0040d9, #004bff, #00aeff, #00ccff);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 1;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.logo:active {
    color: #000
}

.logo:active:after {
    background: transparent;
}


.logo:after {
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
<body>
	

		<div id="ex1"></div>

	<nav class="menu-wel">
		<ul>
			<li>
				<div class="logo">
				<img src="images/complosite.png" alt="Complosite">
	  			</div>
			</li>
		
			
		</ul>
	</nav>

