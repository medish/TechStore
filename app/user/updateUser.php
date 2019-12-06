<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../../index.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>TechStore</title>
</head>
<body>
	<header> 
		<div id = "logo_header">
			<a href="../../index.php"><img src="../img/logo.png"></a>
		</div>
		<div id = "search_bar_header" >		
    		<form action="/action_page.php">
      		<input type="text" placeholder="Chercher un produit, une marque..." name="search">
      		<button type="submit"><img src="../img/icon_search.png"></button>
    		</form>
		</div>
		<div id="buttons_header">
			<button id="button_head_annonce" onclick="window.location.href =' ../login/checkLoginAnnonce.php';">Deposer annonce</button>
			<button id="button_head_compte" onclick="window.location.href = 'profil.php';"><img src="../img/icon_user.png"></button>
		</div>
	</header>
	
	<section id="section_main">
	<nav id="navigation_bar">
		<div id="section_title">Catégories</div>
		<ul>
  		<?php

  			require_once("../main/category.php");
  			getCategories();
  		?>
		</ul>
	</nav>
	<section id="section_center">
	<div id="section_title"> Modifier informations</div>
		<form action="UpdateUser.php" method="POST" id ="updateform" enctype="multipart/form-data" >
		<div>
        	<label for="Login">Login :</label>
        	<input type="text" id="Login" name="annonceur_login">
    	</div>
    	<div>
        	<label for="Password">Password :</label>
        	<input type="password" id="Password" name="annonceur_password">
    	</div>
    	<div>
        	<label for="Password">Confirmer Password :</label>
        	<input type="Password" id="conf_password" name="annonceur_conf_password">
    	</div>
    	<div>
        	<label for="e-mail">E-mail :</label>
        	<input type="e-mail" id="E-mail" name="annonceur_e-mail"></input>
    	</div>
    	<div>
        	<label for="Nom">Nom :</label>
        	<input type="text" id="Nom" name="annonceur_nom"></input>
    	</div>
    	<div>
        	<label for="Prenom">Prénom :</label>
        	<input type="text" id="Prenom" name="annonceur_prenom"></input>
    	</div>
    	<div>
        	<label for="Ville">Ville :</label>
        	<input type="text" id="Ville" name="annonceur_ville"></input>
    	</div>
    	<div>
        	<label for="Telephone">Téléphone :</label>
        	<input type="text" id="Téléphone" name="annonceur_tel"></input>
    	</div>
    	<div>
        	<label for="file">Photo :</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
            <input type="file" name="file" size=3500000 />
        </div>
    	<div class="button" align="center">
        <button type="submit">Valider</button>
   		 </div>
		</form>
	</section>

	<aside id="aside_right">
		<div id="section_title">Statistiques</div>
		<?php  
			require_once("../main/stats.php");
			getStatsCatg();
		?>
	</aside>	

</section>

<footer>
		<footer>
            <p>Copyright Zozor - Tous droits réservés<br />
            <a href="#">Me contacter !</a></p>
        </footer>
	</footer>

</body>
</html>



