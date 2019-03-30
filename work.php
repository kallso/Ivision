<?php

require "php/function_bdd.php";

?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ivision</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="img/logo1.png" sizes="16x16" type="image/png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
	<!--Fontawesome icon-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>
	<!--Material icon-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
	<!--<style>@import url('https://fonts.googleapis.com/css?family=Quicksand');</style>-->
	
	
</head>

<body>
    <!-- Header Start -->
    <header>
      <?php
		$page = 'work'; include "include/header.php";
	   ?>
    </header>
	<!-- header close -->
	
    <!-- Slider Start -->
    <section id="global-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1><strong>Quelques-uns de nos derniers projets</strong></h1>
                        <p><strong>Voyez par vous même. La magie de Ivision.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block presentation">
                        <h1>UN IMPRIMEUR A VOTRE ÉCOUTE POUR UN CONSEIL PERSONNALISÉ</h1>
                        <p>Laissez vous guider de la création graphique à l&rsquo;impression de l&rsquo;ensemble de votre communication, nous cherchons sans cesse à nous adapter et innover en présentant <b>toujours plus de solutions</b>, de produits, et de services : une large gamme de supports de qualité, de papiers recyclés, impression et livraison en J+2, une livraison sur plusieurs points en France Métropolitaine, des devis sur mesure pour des finitions et façonnage hors gamme &#8230;</p>
                        <h2>UNE LARGE SÉLECTION DE SUPPORTS POUR MIEUX VOUS DÉMARQUER</h2>
                        <p>Nous vous apportons <b>des solutions d&rsquo;impression de qualité, des devis clairs et rapides</b>, et optimisons vos solutions d&rsquo;impression au meilleur prix pour tous vos documents &amp; supports (du plus simple au plus créatif). Grâce à notre large champs d&rsquo;action et nos <b>nombreux supports publicitaires</b> modernisons votre image, soyez omniprésent en vous démarquant avec des moyens novateurs.</p>
                        <p>N&rsquo;hésitez pas à <a href="contact.php">nous contacter</a> afin de vous orienter pour choisir <b>le meilleur support en fonction de vos objectifs</b>, pour toute demande de prix ou pour un produit ne figurant pas dans notre e-catalogue.</p>
                        <h2>IDÉES DE SUPPORTS IMPRIMÉS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <section id="portfolio-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="portfolio-contant">
                            <ul id="portfolio-contant-active">
								<?php $bdd = connect();?>
								<?php  $resultat = afficherProduits($bdd);
								foreach ( $resultat as $article): ?>
                                <li class="mix Branding">
                                    <a href="#">
                                        <div class="articlesI">
											<img src="<?php echo $article["lienimage"]; ?>" alt="">
                                        </div>
                                        <div class="overly">
                                            <div class="position-center">
                                                <h2><?php echo $article["produit"]; ?></h2>
                                                <p><?php echo $article["desproduit"]; ?></p>
                                                <form>
                                                    <button type="submit">Ajouter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
								<?php deconnect($bdd);?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Logo Section Start -->
    <section id="clients-logo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div id="clients-logo" class="owl-carousel">
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo1.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo2.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo3.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo4.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo5.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo3.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo2.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo5.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo1.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo4.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo5.png" alt="Features">
                            </div>
                            <div class="clients-logo-img">
                                <img src="img/clients/clients-logo3.png" alt="Features">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action Start -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Découvrez nos multiples services</h2>
                        <p>Pour tout un chacun</p>
                        <a class="btn btn-default btn-call-to-action" href="services.php">Nos services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <!-- footer Start -->
     <footer>
      <?php
		  include "include/footer.html";
	  ?>
    </footer>
	<!-- footer Close -->
	
    <!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->
	
  </body>

</html>