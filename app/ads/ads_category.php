<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ads_category.css">
	<title> Categorie </title>
</head>
<body>
	<header> 
		<div id = "logo_header">
			<a href="#"><img src="../img/logo.png"></a>
		</div>
		<div id = "search_bar_header" >		
    		<form action="/action_page.php">
      		<input type="text" placeholder="Chercher un produit, une marque..." name="search">
      		<button type="submit"><img src="../img/icon_search.png"></button>
    		</form>
		</div>
		<div id="buttons_header">
			<button id="button_head_annonce" onclick="addAnnonce()">Deposer annonce</button>
			<button id="button_head_compte" onclick="compte()"><img src="../img/icon_user.png"></button>
		</div>
	</header>

	<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+- -->
	<!-- -+-+-+-+-+-+-+-+-+- Footer -+-+-+-+-+-+-+-+-+- -->

	<section id="section_main">
	<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+- -->
	<!-- -+-+-+-+-+-+-+-+-+- Section Center-+-+-+-+-+-+-+-+-+- -->
	<section id="section_center">
		<div id="section_title">Annonces</div>
		<section id="section_popular_ads">
			<?php
				require_once("../main/ads.php");
				get_popular_ads(6, 'PC');
			?>
		</section>
			<section id="section_search_filter">
			<form id="filter_form">
				<input type="text" name="keyword" placeholder="Mots clés">
				<input type="text" name="marque" placeholder="Marque">
				<input type="text" name="modele" placeholder="Modèle">
				<input type="text" name="poids" placeholder="Poids">
				<input type="date" name="date_pub">
				<select name ="etat" form="filter_form">
  					<option value="neuf">Neuf</option>
  					<option value="occas">Occasion</option>
				</select> 
				<select name ="ville" form="filter_form">
  					<option value="ville">Ville</option>
				</select>
				<select name ="urgent" form="filter_form">
  					<option value="urgent_t">Urgent</option>
  					<option value="urgent_f">Non urgent</option>
				</select>
				<select name ="photo" form="filter_form">
  					<option value="photo_t">Avec photos</option>
  					<option value="photo_f">Toutes les annonces</option>
				</select>
				 
				<button type="submit">Filtrer</button>
			</form>	
			</section>
		<section id="section_ads">
			<aside class="aside_ad">
				<div class="ad_desc">
					<img src="../img/logo.png">
					
					<div class="ad_caracts">
					<div class="ad_title"><a href="#">Titre de l'annonce</a></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque beatae, ducimus inventore adipisci, repudiandae optio tempore. Hic aut similique blanditiis ab harum vero ullam nobis accusamus libero omnis! Ducimus, asperiores?
					<div class="ad_price">Price : 10000 €</div>
					</div>
				</div>
				<div class="annonceur_div">
					<div class="annonceur_ville">Paris 75000</div>
					<div class="diff_date_pub">5min</div>
					<a href="#"><img src="../img/logo.png"></a>
					<div class="annonceur_nom"><a href="#">Nom annonceur</a></div>
				</div>
			</aside>
			
			<aside class="aside_ad">
				<div class="ad_desc">
					<img src="../img/logo.png">
					
					<div class="ad_caracts">
					<div class="ad_title"><a href="#">Titre de l'annonce</a></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque beatae, ducimus inventore adipisci, repudiandae optio tempore. Hic aut similique blanditiis ab harum vero ullam nobis accusamus libero omnis! Ducimus, asperiores?
					<div class="ad_price">Price : 10000 €</div>
					</div>
				</div>
				<div class="annonceur_div">
					<div class="annonceur_ville">Paris 75000</div>
					<div class="diff_date_pub">5min</div>
					<a href="#"><img src="../img/logo.png"></a>
					<div class="annonceur_nom"><a href="#">Nom annonceur</a></div>
				</div>
			</aside>
		</section>
		
	</section>
	<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+- -->
	<!-- -+-+-+-+-+-+-+-+-+- Section Right-+-+-+-+-+-+-+-+-+- -->
	
	<aside id="aside_right">
		<div id="section_title">Statistiques</div>
		
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