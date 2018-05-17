<?php session_start(); ?>﻿
<?php
/*
$db = mysqli_connect("localhost","root","","fitness"); //keep your db name
$sql = "SELECT * FROM produit where id = 1";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['photo'] ).'"/>';
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness City - Espace Magasin</title>
<meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="store/styles/bootstrap4/bootstrap.min.css">
<link href="store/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="store/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="store/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="store/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="store/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="store/styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="store/styles/categories_responsive.css">

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
								<li>
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
							<h1 class="text-center">Espace Magasin</h1>
                                                        <p> Nos Produits</p>
							
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
	
	</div>
	<!-- END fh5co-page -->

	</div>

<div class="super_container" >


	<div style="margin-top: 50px;" class="container">
		<div class="row" >
			<div class="col product_section clearfix" >


	

				<!-- Main Content -->

				<div class="main_content" style="margin:0 auto;">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">



								<!-- Product Grid -->

								<div class="product-grid">

									<!-- Product 1 -->
									
													
				<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness city";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!isset($_GET['page']))
{
	$num=1;
$sql = "SELECT * FROM produit where id between '1' and '12'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc() ) {
	
       $subids = Array
    (
        'id' => $row["id"]
	
       
    );
	$url='produit.php';
	$final = $url . "?" . http_build_query($subids);
				?>
				
                                    <a href="<?php echo $final ?>">
									<div id="<?php echo $row["id"]; ?>" class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'"/>'; ?>
											</div>
											
											<div class="product_bubble  d-flex flex-column align-items-center">
                                                                                            <span>-20%</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="<?php echo $final ?>"><?php echo utf8_encode($row["nom"]); ?></a></h6>
												<div class="product_price"><?php echo $row["prix"]; ?></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo $final ?>">Ajouter au panier</a></div>
									</div>
									</a>
<?php 
}}}
else if ((isset($_GET['page']))&&($_GET['page']=='2')) {

  $num=2;
$sql1 = "SELECT * FROM produit where id between '13' and '24'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc() ) {
	
       $subids1 = Array
    (
        'id' => $row1["id"]
	
       
    );
	$url1='produit.php';
	$final1 = $url1 . "?" . http_build_query($subids1);
				?>
				
                                    <a href="<?php echo $final1 ?>">
									<div id="<?php echo $row1["id"]; ?>" class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['photo'] ).'"/>'; ?>
											</div>
										
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-20%</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="<?php echo  $final1 ?>"><?php echo utf8_encode($row1["nom"]) ?></a></h6>
												<div class="product_price"><?php echo $row1["prix"]; ?></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="<?php echo $final1 ?>">Ajouter au panier</a></div>
									</div>
									</a>
<?php 
}}}
							?>	
								<!-- Product Sorting -->
<div></div>
							

							</div>
								<div class="product_sorting_container product_sorting_container_bottom clearfix">
								
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span><?php echo $num; ?></span>
											<ul class="page_selection">
												<li><a href="produits.php">1</a></li>
												<li><a href="produits.php?page=2">2</a></li>
												
											</ul>
										</div>
										<div class="page_total"><span>de</span> 2</div>
										<div id="next_page_1" class="page_next"><a href="produits.php?page=<?php echo ($num+1); ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>
<br><br>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




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
						</div>
                                            <div class="col-md-4 animate-box">
							<h3 class="section-title">Heures d'ouverture : </h3>
							<ul class="contact-info">
								<li>Lundi à Vendredi : 9:00 a 22h00</li>
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



<script src="store/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="store/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="store/plugins/easing/easing.js"></script>

<script src="store/js/categories_custom.js"></script>
</body>

</html>
