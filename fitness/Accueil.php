<?php session_start(); ?>﻿
<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bienvenue à Fitness City</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
                <style>
            .face {
        background: url(data:image/jpg;base64,<?php echo base64_encode($_SESSION["photo"]);?>);
    display: block;
    background-size:100% 100% ;
    border-radius: 70%;

}
            
        </style>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                                                <h1 id="fh5co-logo"><a href="Accueil.php">Fit<span>ness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
                                                                    <a href="Accueil.php">Accueil</a>
								</li>
								
								<li>
                                    <a href="schedule.php" >Planning</a>
								</li>
                                                                <li>
									<a href="cours.php" class="fh5co-sub-ddown">Cours</a>
									
								</li>
                                                                <li>
									<a href="tarif.php">Tarifs</a>
								</li>
                                                                <li><a href="entraineurs.php">Entraineurs</a></li>
								<li >
                                                                   <?php if(isset($_SESSION["login"])){
                                                                   echo" <a href='service_client.php'>Espace Client</a>";
                                                                   }
                                                                   else 
                                                                   { echo" <a href='client.php'>Espace Client</a>";}
                                                                ?>
                                                                
                                                                
                                                                </li>
                                                                <li><a href="produits.php">Espace Magasin</a></li>
								
								<li><a href="contact.php">Contact</a></li>
                                                                <li><a style="color:whitesmoke"> <u><b>
                                                                            <?php 
                                                                            if (isset($_SESSION["login"]))
                                                                         { echo "Salut ".$_SESSION["login"]." !";
                                                                         } ?></u>
                                                                        </b></a></li>
                                                                        <li> 
	<?php  if(isset($_SESSION["login"])){
									echo'<button class="face" type="button" >
                                                                    <span style="color: transparent;">____</span>
                                                                                                      </button>
									<ul class="fh5co-sub-menu">
									 	<li><a href="signout.php">Se Deconnecter</a></li>
									 	
        </ul>';} ?>
								</li>
							</ul>
						
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/c.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness <b>City</b></h2>
                                <h3><b>Vivez énergie, vivez santé!</b></h3>
                                <br />
                                <h3>Découvrez une nouvelle passion <br /> Découvrez un nouveau style de vie</h3>
                                <span><a class="btn btn-primary" href="client.php">Rejoignez-nous</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:fh5co-hero -->
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Bienvenue à Fitness City</h2>
							<p>En recherche d'un centre de fitness à Tunis ? Ne cherchez plus loin, Fitness City est l'endroit idéal pour vous.</p>
                            <p>Un centre équipé avec les meilleurs équipements et les meilleurs coachs pour tous vos besoins et plus.</p>
                            <p>Rejoignez nous aujourd'hui et faites l'expérience d'un entrainement comme vous n'en avez jamais eu. Une nouvelle vie vous attends.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-parallax" style="background-image: url(images/a.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Faites le paris d'une routine plus saine</h1><br />
                            <p>Plongez dans le monde de la fitness et ouvrez vous à une nouvelle expérience plus saine de la vie.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
            <br />
		<div class="fh5co-parallax" style="background-image: url(images/b.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
						<div class="fh5co-intro fh5co-table-cell box-area">
							<div class="animate-box">
								<h1>Préparer votre corps pour l'été</h1>
								<p>Rejoignez-nous maintenant et recevez une réduction de 20%</p>
								<a href="schedule.php" class="btn btn-primary">Decouvrez notre programme</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Avis de nos membres</h2>
							<p>Voici ce que nos chers membres ont à dire sur Fitness City</p>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="pricing">
                        <div class="col-md-3 animate-box">
                            <div class="price-box animate-box">
                                <div class="price">Syrine<small>29ans</small></div>
                                <p>"Fitness City a changé ma vie. Pas seulement physiquement, mais aussi mentallement. Je suis une meilleure mère, une meilleure épouse et générallement une meilleure personne grâce à Fitness City."</p>
                            </div>
                        </div>
                        <div class="col-md-3 animate-box">
                            <div class="price-box animate-box">
                                <div class="price">Ahmed<small>24ans</small></div>
                                <p>"Un bon centre, de bon prix, des membres qui n'hésitent pas à vous aider."</p>
                            </div>

                        </div>
                        <div class="col-md-3 animate-box">
                            <div class="price-box animate-box">
                                <div class="price">Sana<small>32ans</small></div>
                                <p>"Fitness City pour moi c'est une famille qui t'encourage, te pousse et t'enseigne.L'entraide est capitale, et les nouveaux membres sont toujours bien accueilli dans la famille"</p>
                            </div>
                        </div>
                        <div class="col-md-3 animate-box">
                            <div class="price-box animate-box">
                                <div class="price">Achref<small>51ans</small></div>
                                <p>"J'adore la communité ici. Pour moi ce n'est plus un gym traditionnel mais plutôt une tribu. On se pousse et s'aide mutuellement et ça se sent."</p>
                            </div>
                        </div>
                    </div>
			</div>
		</div>
		

		<!-- fh5co-blog-section -->
				<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">A Propos de nous
</h3>
							<p>Chez Fitness, nous croyons que tout le monde devrait avoir la possibilite de profiter d'un style de vie sain et en forme. Nous l'avons donc rendu simple, abordable et pratique pour que chacun puisse atteindre ses objectifs de sante personnels. Que vous soyez un débutant ou un pro, jeune ou vieux, nous sommes la pour tout le monde.</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Notre Adresse </h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>Tunis , Tunisia</li>
								<li><i class="icon-phone"></i>+ 1235 2355 98</li>
								<li><i class="icon-envelope"></i>fitnesscitytn@gmail.com</li>
								<li><i class="icon-globe2"></i>www.yoursite.com</li>
                                                                
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Heures d'ouverture : </h3>
							<ul class="contact-info">
								<li>Lundi à Vendredi : 9:00 à 22h00</li>
								<li>Samedi et Dimanche : 9h00 à 19h00</li>
								
                                                                
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

