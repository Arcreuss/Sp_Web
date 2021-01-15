</div>
</body>
<div class="foot">
<footer>
        <p id="warning">
        Attention, Ce site n'est pas objectif. Nous n'approuvons aucune théorie, nous les partageons et les expliquons seulement. Merci de ne pas croire à tout ce qui est écrit ici ou sur d'autres sites
        </p>
		<p>
			Copyright &copy; PERROD Ethan / GOÏ Lucas / DELVALLE Luc / PIERRE Aymeric / CHAOUKI Younes 2021 All Right reserved
		</p>
	</footer>
</div>

</html>

<style>
#warning{
    color: red;
}
.foot{
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
	text-align: center;
}

.foot:before {
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

.foot:active {
    color: #000
}

.foot:active:after {
    background: transparent;
}


.foot:after {
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

