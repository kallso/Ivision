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
	<!--Fontawesome icon-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" 
	integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" 
	crossorigin="anonymous"> 
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
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script> 
	<script src="js/main.js"></script>
    
	<!--Material icon-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Police-->
    <link href="https://fonts.googleapis.com/css?family=Nunito|Sonsie+One" rel="stylesheet">
    


  </head>
  <body>
  
    <!-- Header Start -->
    <header>
      <?php
		$page = 'contact'; include "include/header.php";
	  ?>
    </header>
	<!-- header close -->
        
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="block">
				  <div id="validate">
					<h2><strong>Message envoyé</strong></h2>
				  </div>
                  <h1 id="transform">Laissez un commentaire !</h1>
                  <p id="delete"><strong>N'hésitez pas à nous partager votre projet ou vos questions.</strong></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="block">
							<form action="contact.php" method="post">
								<div class="form-group">
									<input type="text" name="nom" class="form-control" placeholder="Votre nom">
								</div>
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Votre e-mail">
								</div>
								<div class="form-group">
									<input type="text" name="telephone" class="form-control" placeholder="Telephone">
								</div>
								<div>
									<span class="wpcf7-form-control-wrap Sujet">
									<select name="Sujet" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
									<?php
										#Connexion à la BDD
										$bdd = connect();
							
										if($bdd != null)
										{
											propMessage ($bdd);
										}
										
										#Couper la connexion avec la BDD
										deconnect($bdd);
									?>
									</select></span>
								</div>
								<div class="form-group">
									<textarea style="height: 160px; resize: none" name="message" class="form-control" rows="10" placeholder="Votre message"></textarea> 
								</div>
								<div class="clearfix">
								<button class="btn btn-default" type="submit">Envoyer message</button>
								</div>
							</form>
							    <?php
									#Connexion à la BDD
									$bdd = connect();
									
									extract($_POST);
									
									if(!empty($nom) && !empty($email) && !empty($telephone) && !empty($Sujet) && !empty($message))
									{
										ajouterMessage($bdd, $nom, $email, $telephone, $Sujet, $message);
									}
									
									#Couper la connexion avec la BDD
									deconnect($bdd);
							    ?>
						</div>
					</div>
					<div id="contact-box" >
					    <div class="col-md-5 col-md-offset-1 col-sm-12">
							<div class="block">							
								<h2 class="col-xs-10">Nous rendre visite</h2>
								<div class="col-xs-2">
									<img src="img/logo3.png" alt="logo" title="" />
								</div>
								<div class="col-xs-12">
									<ul class="address-block">
										<li>
										  <i class="fa fa-map-marker"></i>Allées Jean-Jaurès, Toulouse
										</li>
										<li>
										  <i class="fa fa-envelope-o"></i>Email : I-vision@gmail.com
										</li>
										<li>
										  <i class="fa fa-phone"></i>Téléphone : 05.61.46.82.15
										</li>
									</ul>
								</div>
								<div class="col-xs-12">
									<ul class="social-icons2">
										<li>
										  <a href="#"><i class="fa fa-google"></i></a>
										</li>
										<li>
										  <a href="#"><i class="fa fa-linkedin"></i></a>
										</li>
										<li>
										  <a href="#"><i class="fa fa-pinterest"></i></a>
										</li>
										<li>
										  <a href="#"><i class="fa fa-dribbble"></i></a>
										</li>
										<li>
										  <a href="#"><i class="fa fa-behance"></i></a>
										</li>
										<li>
										  <a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
										  <a href="#"><i class="fa fa-facebook"></i></a>
										</li>
									</ul>
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
              <div class="col-md-12 col-sm-12">
                <div class="block">
                  <h2>Retrouvez nous sur Google Map</h2>
					<div id="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2044.2132122258329!2d1.466473886121887!3d43.56584058130082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebc86803b55bd%3A0xed8e8cf82d0eddc8!2sIpst-Cnam!5e0!3m2!1sen!2sfr!4v1522450864220" 
						width="1540" height="395" frameborder="0" style="border: 1px solid #1D1D1D" allowfullscreen></iframe>
					</div>
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
        
        
  </body>  
</html>