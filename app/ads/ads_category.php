<html>
<head>
	<?php 
		require_once("../user/newuser.php");
		require_once("../main/ads.php");
		require_once("./ads_control.php");

	?>
	<meta charset="utf-8">
	<!--<meta http-equiv="Refresh" content="0; url=https://www.w3docs.com" /> -->
	<link rel="stylesheet" type="text/css" href="ads_category.css">
	<title> Categorie </title>
</head>
<body>
	<header> 
		<div id = "logo_header">
			<a href="../../index.php"><img src="../img/logo.png"></a>
		</div>
		<div id = "search_bar_header" >		
    		<form action="<?=$_SERVER['PHP_SELF'];?>">
      		<input type="text" placeholder="Chercher un produit, une marque..." name="keyword">
      		<button type="submit"><img src="../img/icon_search.png"></button>
    		</form>
		</div>
		<div id="buttons_header">
			<button id="button_head_annonce" onclick="window.location.href =' ../login/checkLoginAnnonce.php';">Deposer annonce</button>
			<button id="button_head_compte" onclick="window.location.href = '../login/checkLogin.php';"><img src="../img/icon_user.png"></button>
			<?php require("../main/logout_print.php"); ?>
		</div>
	</header>

	<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+- -->
	<!-- -+-+-+-+-+-+-+-+-+- Footer -+-+-+-+-+-+-+-+-+- -->

	<section id="section_main">
	<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+- -->
	<!-- -+-+-+-+-+-+-+-+-+- Section Center-+-+-+-+-+-+-+-+-+- -->
	<section id="section_center">
		<div id="section_title">Annonces</div>
		<div id="section_categories">
			<ul>

  		<?php
  			require_once("../main/category.php");
  			getCategories();
  		?>
		</ul>
		</div>
		<section id="section_popular_ads">
			<?php
				get_popular_ads(6,$cat);
			?>
		</section>
		<hr>
			<section id="section_search_filter">
			<form method="get" action="<?=$_SERVER['PHP_SELF'];?>"  id="filter_form">
				<input type="hidden" name="cat" value="<?php echo $cat;?>">
				<input type="text" name="keyword" placeholder="Mots clés" value="<?php echo $keyword; ?>">
				<input type="text" name="marque" placeholder="Marque" value="<?php echo $marque; ?>">
				<input type="text" name="modele" placeholder="Modèle" value="<?php echo $modele; ?>">
				
				<select name ="etat" form="filter_form">
					<option value="" selected hidden><?php echo $etat=='' ? 'Etat' : $etat; ?></option>
					<option value="Neuf">Neuf</option>
  					<option value="Occasion">Occasion</option>
  					<option value="">Peu importe</option>
				</select> 
				<select name ="ville" form="filter_form">
					<option value="" selected hidden><?php echo $ville=='' ? 'Ville' : $ville; ?></option>
  					<option value="Paris">Paris</option>
					<option value="Lyon">Lyon</option>
					<option value="Marseille">Marseille</option>
					<option value="Toulouse">Toulouse</option>
					<option value="Caen">Caen</option>
					<option value="Bordeaux">Bordeaux</option>
					<option value="Montpellier">Montpellier</option>
					<option value="Rennes">Rennes</option>
					<option value="Nantes">Nantes</option>
					<option value="Lille">Lille</option>
					<option value="Strasbourg">Strasbourg</option>
					<option value="Versailles">Versailles</option>
					<option value="Creteil">Créteil</option>
					<option value="">Toute la france</option>

				</select>
				<select name ="urgence" form="filter_form">
					<option value="" selected hidden><?php echo $urgence=='' ? 'Urgence' : $urgence; ?></option>
  					<option value="Urgent">Urgent</option>
  					<option value="Non urgent">Non urgent</option>
  					<option value="">Peu importe</option>
				</select>
				<select name ="photos" form="filter_form">
					<option value="" selected hidden><?php echo $photos=='' ? 'Photos' : $photos; ?></option>
  					<option value="Avec photos">Avec photos</option>
  					<option value="Sans photos">Sans photos</option>
  					<option value="">Peu importe</option>
				</select>
				
					<input type="text" name="prix_min" placeholder="Prix min" value="<?php echo $prix_min; ?>">
					<input type="text" name="prix_max" placeholder="Prix max" value="<?php echo $prix_max; ?>">
				
					<input type="text" name="poids_min" placeholder="Poids min" value="<?php echo $poids_min; ?>">
					<input type="text" name="poids_max" placeholder="Poids max" value="<?php echo $poids_max; ?>">
				
					<input  type="text" placeholder="Date de" 
					onfocus="(this.type='date')"  onblur="(this.type='text')" name="date_min" value="<?php echo $date_min; ?>">
					<input type="text" placeholder="Date à" 
					onfocus="(this.type='date')"  onblur="(this.type='text')" name="date_max" value="<?php echo $date_max; ?>">
				
				 
			</form>
			<?php printFormCatg($cat); ?>
			<div style="display: flex;justify-content: flex-end;">
				<input id="button_filter" form="filter_form" type="submit" name="filterButton" value="Filtrer"></input>
				<input id="button_reset" form="filter_form" type="reset" onclick='document.getElementById("filter_form").reset();'>
			</div>
			</section>
			<hr>
		<section id="section_ads">
			<?php
				if($cat == 'PC'){
					$q = get_ads_query($keyword,$cat, $marque, $modele, $etat, $poids_min, $poids_max, $prix_min, $prix_max, $ville, $urgence, $date_min, $date_max, $photos, $cpu, $diag, $ram, $taille_disk, $type_disk, $os, $c_g,'');
				}
				else if ($cat == 'Téléphonie'){
					$q = get_ads_query($keyword,$cat, $marque, $modele, $etat, $poids_min, $poids_max, $prix_min, $prix_max, $ville, $urgence, $date_min, $date_max, $photos, $cpu, $diag, $ram, $taille_disk, $type_disk, $os, '',
						$app_photo);
				}
				else 
					$q = get_ads_query($keyword,$cat, $marque, $modele, $etat, $poids_min, $poids_max, $prix_min, $prix_max, $ville, $urgence, $date_min, $date_max, $photos);				

			    //echo $q;
			    
				printResults($q);
			?>
		</section>
		
	</section>
	<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+- -->
	<!-- -+-+-+-+-+-+-+-+-+- Section Right-+-+-+-+-+-+-+-+-+- -->
	
	<aside id="aside_right">
		<div id="section_title">Statistiques</div>
		<div>Classement par catégorie</div>
		<?php  
			require_once("../main/stats.php");
			getStatsCatg();

		?>
		<div>Classement par ville</div>
		<?php  
			getStatsVille();
		?>
	</aside>
	</section>


	<footer>
           <div><h2>Visiteurs : <?php echo getNumberVisitors(); ?></h2></div>
           
    </footer>
</body>
</html>