<?php session_start(); ?>﻿
<?php
$id=$_GET['id'];
$db = mysqli_connect("localhost","root","","fitness city"); //keep your db name
$sql = "SELECT * FROM produit where id = '$id'";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
<title>Fitness City  - Espace Magasin</title>
<meta charset="iso-8859-15">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="store/styles/bootstrap4/bootstrap.min.css">
<link href="store/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="store/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="store/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="store/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="store/plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="store/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="store/styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="store/styles/single_responsive.css">


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
								<li >
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
                                                                <li class="active"><a href="produits.php">Espace Magasin</a></li>
								
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
	<div class="fh5co-parallax" style="background-image: url(images/pro.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Nos Produits</h1>
                                                        <p> Produit </p>
							
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
	
	</div>
	<!-- END fh5co-page -->

	</div>


<div class="super_container">


	<div class="container single_product_container">
	

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['photo'] ).'"/>'; ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2><?php echo utf8_encode($result['nom']);?></h2>
						<p> <?php echo utf8_encode( $result['description'])?> </p>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>Livraison gratuite</span>
					</div>
					
					<div class="product_price"><?php echo $result['prix']?> </div>
				
			
					<form method="post" class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
				
						<input type="submit" onclick=" " name="send" value="AJOUTER AU CHARIOT" style="color:white; font-size:16px;" class="red_button add_to_cart_button">
			

					</form>
					
				</div>
			</div>
		</div>

	</div>

<?php

?>


</div>
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
						</div>*<div class="col-md-4 animate-box">
							<h3 class="section-title">Heures d'ouverture : </h3>
							<ul class="contact-info">
								<li>Lundi a Vendredi : 9:00 a 22h00</li>
								<li>Samedi et Dimanche : 9h00 a 19h00</li>
								
                                                                
							</ul>
						</div>
						
					</div>
					
				</div>
			</div>
		</footer>


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

<script src="store/js/jquery-3.2.1.min.js"></script>
<script src="store/styles/bootstrap4/popper.js"></script>
<script src="store/styles/bootstrap4/bootstrap.min.js"></script>
<script src="store/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="store/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="store/plugins/easing/easing.js"></script>
<script src="store/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="store/js/single_custom.js"></script>

	
</body>

</html>

<?php
$var="
<script type=\"text/javascript\">
document.write(document.getElementById('quantity_value').innerHTML);
</script> ";  

 $log=$_SESSION["login"];
 
					  if (isset($_POST["send"]))
{
	if (isset($log)){
$db = mysqli_connect("localhost","root","","fitness city"); //keep your db name
$sql1 = "INSERT INTO panier_client (login_client, id_produit) VALUES ('$log', '$id')";
echo"
<script type=\"text/javascript\">
window.location = \"Paiement.php\";
</script> ";
if ($db->query($sql1) === TRUE) {

}	
	}
	else {echo"
<script type=\"text/javascript\">
window.location = \"client.php?param=payment\";
</script> "; }

}

	

?>