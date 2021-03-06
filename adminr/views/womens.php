<?PHP
include_once "../../entities/produit.php";
include_once "../../core/produitsCore.php";
$produit1C=new ProduitsCore();
$listeProduits=$produit1C->afficherProduits();
$listeProduits1=$produit1C->afficherProduits();
$i=0;
$compteur=0;
$test=0;
$db = config::getConnexion();
//var_dump($listeEmployes->fetchAll());
$messagesParPage=4; //Nous allons afficher 5 messages par page.

foreach($listeProduits1 as $row){ 
$compteur++;}          //$messagesParPage=5; //Nous allons afficher 5 messages par page.
$nombreDePages=ceil($compteur/$messagesParPage);

if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle=intval($_GET['page']);
 
     if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $pageActuelle=$nombreDePages;
     }
}
else // Sinon
{
     $pageActuelle=1; // La page actuelle est la n°1    
}
$premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcul la première entrée à lire
 
// La requête sql pour récupérer les messages de la page actuelle.
$listeProduits=$db->query('SELECT * From produits inner join categorie on produits.id=categorie.id ORDER BY IDP DESC LIMIT '.$premiereEntree.', '.$messagesParPage.'');
//var_dump($listeEmployes->fetchAll());
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx"> 
<head>
<title>Hager Ayed a E-Commerce & Fashion Category </title><!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Hager Ayed a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->	<link rel="stylesheet" href="css/bootstrap.css"	type="text/css" media="all">
<!-- Index-Page-CSS -->	<link rel="stylesheet" href="css/style.css"		type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="css/font-awesome.css" 		 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/function_prod_front.js"></script>
</head>
<!-- //Head -->



<!-- Body -->
<body>



	<!-- Header -->
	<div class="agileheader" id="agileheadermens">
		<!-- Navigation -->
		<nav class="navbar navbar-default w3ls navbar-fixed-top">
			<div class="container">
				<div class="navbar-header wthree nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand agileinfo" href="index.html"><span>Hager</span> Ayed</a>
					<ul class="w3header-cart">
						<li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-notify my-cart-badge"></span></span></li>
					</ul>
				</div>
				<div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle w3-agile hyper" data-toggle="dropdown"><span> MEN </span></a>
							<ul class="dropdown-menu aits-w3 multi multi1">
								<div class="row">

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
										<ul class="multi-column-dropdown">
											<li class="heading">FEATURED</li>
											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>New Arrivals</a></li>
											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Only</a></li>
											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a></li>
											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance Sale</a></li>
											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount Store</a></li>
											<li><a href="mens.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's Pick</a></li>
										</ul>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-2">
										<p>TORSO</p>
										<a href="mens.html"><img src="images/men-nav-1.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-3">
										<p>LEGS</p>
										<a href="mens.html"><img src="images/men-nav-2.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-4">
										<p>ACCESSORIES</p>
										<a href="mens_accessories.html"><img src="images/men-nav-3.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="clearfix"></div>
									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>
								</div>

							</ul>
						</li>-->


						<li class="dropdown">
							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> FEMMES </span></a>
							<ul class="dropdown-menu multi multi2">
								<div class="row">

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-1">
										<ul class="multi-column-dropdown">
											<li class="heading">EN VEDETTE</li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Nouveautés</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>En ligne seulement</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Evenements</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>promotion</a></li></li>
										</ul>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-2">
										<p>ROBES De SOIREE</p>
										<a href="womens.php"><img src="images/women-nav-11.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-3">
										<p>ROBES De MARIAGE </p>
										<a href="womens.php"><img src="images/women-nav-22.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-4">
										<p>TOUTES LES ROBES</p>
										<a href="womens_accessories.html"><img src="images/women-nav-33.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="clearfix"></div>
									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>
								</div>

							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> ACCESSORIES </span></a>
							<ul class="dropdown-menu multi multi3">
								<div class="row">

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-1">
										<ul class="multi-column-dropdown">
											<li class="heading">EN VEDETTE</li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Nouveautés</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>En ligne seulement</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Evenements</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>promotion</a></li>
										</ul>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-2">
										<p>MARIAGE</p>
										<a href="mens_accessories.html"><img src="images/women-nav-33.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-3">
										<p>WOMEN</p>
										<a href="womens_accessories.html"><img src="images/other-nav-2.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-4">
										<p>SOIREE</p>
										<a href="mens_accessories.html"><img src="images/women-nav-11.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="clearfix"></div>
									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>
								</div>

							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> HOTLIST </span></a>
							<ul class="dropdown-menu multi multi4">
								<div class="row">

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-1">
										<ul class="multi-column-dropdown">
											<li class="heading">EN VEDETTE</li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Nouveautés</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>En ligne seulement</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Evenements</a></li>
											<li><a href="womens_accessories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>promotion</a></li>

										</ul>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-2">
										<p>ROBE DU SOIREE</p>
										<a href="mens.html"><img src="images/women-nav-11.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-3">
										<p>WOMEN</p>
										<a href="womens.php"><img src="images/women-nav-33.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-4">
										<p>ROBE DU MARIAGE</p>
										<a href="mens_accessories.html"><img src="images/women-nav-22.jpg" alt="Hager Ayed"></a>
									</div>

									<div class="clearfix"></div>
									<p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a href="#">Details</a></p>
								</div>

							</ul>
						</li>
						<li><a href="about.html">INFO</a></li>
						<li class="wthreesearch">
							 <form method="POST">
                                                <table>
                                                <input id="search_prod_front" type="search" placeholder="Search..." class="search-int form-control">
                                                </table>
                                            </form>
						</li>
						<li class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						 <form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navigation -->



		<!-- Header-Top-Bar-(Hidden) -->
		<div class="agileheader-topbar">
			<div class="container">
				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid1">
					<p>Free shipping on orders over $150. <a href="payment.html">Details</a></p>
				</div>
				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid2">
					<ul>
						<li><a href="stores.html">Store Locator</a></li>
						<li><a class="popup-with-zoom-anim" href="#small-dialog1">S'identifier</a></li>
						<li><a class="popup-with-zoom-anim" href="#small-dialog2">S'inscrire</a></li>
						<li><a href="codes.html">Codes</a></li>
						<li><a href="about.html">Info</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

				<!-- Popup-Box -->
				<div id="popup1">
					<div id="small-dialog1" class="mfp-hide agileinfo">
						<div class="pop_up">
							<form action="#" method="post">
								<h3>S'IDENTIFIER</h3>
								<input type="text" Name="Userame" placeholder="Nom d'utilisateur" required="">
								<input type="password" Name="Password" placeholder="MOT du passe" required="">
								<ul class="tick w3layouts agileinfo">
									<li>
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>Souviens-toi de moi</label>
									</li>
									<li>
										<a href="#">Informations de compte oubliées?</a>
									</li>
								</ul>
								<div class="send-button wthree agileits">
									<input type="submit" value="IDENTIFIER">
								</div>
							</form>
						</div>
					</div>
					<div id="small-dialog2" class="mfp-hide agileinfo">
						<div class="pop_up">
							<form action="#" method="post">
								<h3>S'INSCTIRE</h3>
								<input type="text" Name="Name" placeholder="Nom" required="">
								<input type="text" Name="Email" placeholder="Email" required="">
								<input type="password" Name="Password" placeholder="Mot de passe" required="">
								<input type="text" Name="Phone Number" placeholder="numero de telephene" required="">
								<div class="send-button wthree agileits">
									<input type="submit" value="S'INSCTIRE">
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- //Popup-Box -->
		</div>
		<!-- //Header-Top-Bar-(Hidden) -->



		<!-- Banner -->
		<div class="agileheader-banner">
			<img src="images/womens-banner.jpg" alt="Hager Ayed">
		</div>
		<!-- //Banner -->

	</div>
	<!-- //Header -->



	<!-- Heading -->
	<h1 class="w3wthreeheadingaits">WOMEN'S CLOTHING</h1>
	<!-- //Heading -->



	<!-- Women's-Product-Display -->
	<div class="wthreeproductdisplay">
		<div id="cbp-pgcontainer" class="cbp-pgcontainer">
			<div  id= "resultat_prod_front">
			<ul class="cbp-pggrid">
			<?PHP foreach($listeProduits as $row){ ?>
				
	            <li class="wthree aits w3l">
					<div class="cbp-pgcontent" id="women-1">
						<span class="cbp-pgrotate"><i class="fa fa-exchange" aria-hidden="true"></i></span>
						<a href="womens_single.html">
							<div class="cbp-pgitem a3ls">
								<div class="cbp-pgitem-flip">
									<?php echo '<td> <img src="images/' . $row['image']. '" style="width: 130px;height: 130px;"> </td>'; 
                                        ?>
								</div>
							</div>
						</a>
						<ul class="cbp-pgoptions w3l">
							<li class="cbp-pgoptcompare">
								<input type="checkbox" name="checkboxG31" id="checkboxG31" class="css-checkbox w3"><label for="checkboxG31" class="css-label"></label>
							</li>
							<li class="cbp-pgoptfav">
								<span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span>
							</li>
							<li class="cbp-pgoptsize agile">
								<span data-size="XL"><?PHP echo $row['Taille']; ?></span>
								<div class="cbp-pgopttooltip">
									<span data-size="XL">XL</span>
									<span data-size="L">L</span>
									<span data-size="M">M</span>
									<span data-size="S">S</span>
								</div>
							</li>
							<li class="cbp-pgoptcart">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3l_item" value="Striped Top "> 
										<input type="hidden" name="amount" value="25.00"> 
										<button type="submit" class="w3l-cart pw3l-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1"></a>
									</form>
							</li>
						</ul>
					</div>
					<a href="womens_single.html">
						<div class="cbp-pginfo w3layouts">
							<h3><?PHP echo $row['Nom']; ?></h3>
							<span class="cbp-pgprice"><?PHP echo $row['Prix']; ?>DT</span>
						</div>
					</a>
				</li>
       
             <?PHP }
                                   // echo '<p align="center">Page : ';
                                    for ($i=1; $i<=$nombreDePages ; $i++)
                                     {
                                        if ($i==$pageActuelle) {
                                            # code...
                                         ?>
                                   
                            <div class="custom-pagination">
                                <a class="page-link" href="#"><?php echo $i; ?></a>
                                <?php
                                         }
                                         else
                                         {

                                            ?>
                                            <a href="womens.php?page=<?php echo $i; ?>" class="page-link">
                                                                            <?php echo $i;?> </a>
                                                                            <?php
                                         }
                                        }
                                    echo '</p>';
                                    ?>
                                
                            </div>
			</ul>
		</div>
	</div>
	<!-- //Women's-Product-Display -->



	<!-- Newsletter -->
	<div class="w3lsnewsletter" id="w3lsnewsletter">
		<div class="container">
			<div class="w3lsnewsletter-grids">
				<div class="col-md-5 w3lsnewsletter-grid w3lsnewsletter-grid-1 subscribe">
					<h2>Subscribe to our Newsletter</h2>
				</div>
				<div class="col-md-7 w3lsnewsletter-grid w3lsnewsletter-grid-2 email-form">
					<form action="#" method="post">
						<input class="email" type="email" name="Email" placeholder="Email Address" required="">
						<input type="submit" class="submit" value="SUBSCRIBE">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Newsletter -->



	<!-- Footer -->
	<div class="agileinfofooter">
		<div class="agileinfofooter-grids">

			<div class="col-md-4 agileinfofooter-grid agileinfofooter-grid1">
				<ul>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="womens.php">WOMEN'S</a></li>
					<li><a href="womens_accessories.html">WOMEN'S ACCESSORIES</a></li>
					<li><a href="womens_accessories.html">EVENEMENTS</a></li>
					<li><a href="womens_accessories.html">PROMOTION</a></li>

				</ul>
			</div>

			<div class="col-md-4 agileinfofooter-grid agileinfofooter-grid2">
				<ul>
					<li><a href="stores.html">STORE LOCATOR</a></li>
					<li><a href="faq.html">FAQs</a></li>
					<li><a href="codes.html">CODES</a></li>
					<li><a href="icons.html">ICONS</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
			</div>

			<div class="col-md-4 agileinfofooter-grid agileinfofooter-grid3">
				<address>
					<ul>						

						<li>2036 la Soukra</li>
					    <li> Commerce 2, 61 Av. 
						de l’Union du Maghreb Arabe</li>
						<li>SK, Tunisie</li>
						<li>+1 (216) </li>
						<li><a class="mail" href="hagerayed@hagerayed.com">hagerayed@hagerayed.com</a></li>
					</ul>
				</address>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Footer -->



	<!-- Copyright -->
	<div class="w3lscopyrightaits">
		<div class="col-md-8 w3lscopyrightaitsgrid w3lscopyrightaitsgrid1">
			<p>2019 © Hager Ayed | Designed by  <a href="https://www.facebook.com/firas.sougui.3" target="=_blank"> NeoDev </a></p>
		</div>
		<div class="col-md-4 w3lscopyrightaitsgrid w3lscopyrightaitsgrid2">
			<div class="agilesocialwthree">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/HAGER-AYED-282541331847420/" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
					<li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
					<li><a href="" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/hagerayed/?hl=fr-ca" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //Copyright -->


<!-- Default-JavaScript --><script src="js/jquery-2.2.3.js"></script>
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links -->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3l.render();

        w3l.cart.on('w3agile_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 


		<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->

		<!-- Popup-Box-JavaScript -->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!-- //Popup-Box-JavaScript -->

		<script src="js/cbpShop.min.js"></script>
		<script>
			var shop = new cbpShop( document.getElementById( 'cbp-pgcontainer' ) ); 
		</script>

	<!-- //Custom-JavaScript-File-Links -->


		<!-- Bootstrap-JavaScript --> <script src="js/bootstrap.js"></script>

</body>
<!-- //Body -->



</html>