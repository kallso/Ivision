<?php

require "php/function_bdd.php";

?>

<!DOCTYPE html>
<html class="no-js">
  <head>
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
  
  </head>
  <body>
  
    <!-- header start -->
    <header>
        <div class="container">
            <div class="row">
                    <div class="col-md-6">
                        <a href="index.php">
							<img src="img/logolong.png" alt="logo"/>
						</a>
                    </div>
					<div class="col-md-6">
                       <h1 id="admin-h1">Administration</h1>
                    </div>
            </div>
        </div>
    </header>
	<!-- header close -->
	<div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Actions sur les propriétés message</h2>
            <p>Ajout, suppression, édition de propriétés message</p>
          </div>
        </div>
        <div class="row ">
          <div class="col-sm-6 col-md-4">
            <div class="service-item">
              <!-- AJOUT D'UNE PROPRIETE MESSAGE -->
	
				<form name="form1" action="admin.php" method="get"> 
				<p><strong>Ajout d'une propriété message</strong></p>
				<input type="text" name="propriete" placeholder="Nouvelle propriété">   
				<button type="submit">Ajouter</button>
				</form>
				<?php
						extract($_GET);
							if(!empty($propriete))
							{
								#Etablir une connexion avec la BDD
								$bdd = connect();
							
								if($bdd != null)
								{
									echo 'Connexion réussi';
									ajoutpropmessage($bdd, $propriete);
								}
								
								#Couper la connexion avec la BDD
								deconnect($bdd);
							}
				?>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="service-item">
              <!-- SUPPRESSION D'UNE PROPRIETE MESSAGE -->
	
				<form name="form2" action="admin.php" method="get">
				<p><strong>Suppression d'une propriété message</strong></p>
				<?php
						extract($_GET);
							#Etablir une connexion avec la BDD
							$bdd = connect();
								
							if($bdd != null)
							{
								propMessagelist ($bdd);		
							}
								
							if(!empty($supprimer))
							{
								deletepropmessage($bdd, $statut);
							}
							
							#Couper la connexion avec la BDD
							deconnect($bdd);
				?>
				<input type="submit" name="supprimer" value = "Supprimer">
				</form>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="service-item">
              <!-- MISE A JOUR D'UNE PROPRIETE MESSAGE -->

				<form name="form3" action="admin.php" method="get">	
				<p><strong>Mise à jour d'une propriété message</strong></p>
				<?php      
						extract($_GET);
							#Etablir une connexion avec la BDD
							$bdd = connect();
					
							if($bdd != null)
							{
								propMessagelist ($bdd); 
							}   
					
							if(!empty($statut) || !empty($proprietemessage))
							{
								Majpropmessage($bdd, $statut, $proprietemessage);
							}
							
							#Couper la connexion avec la BDD
							deconnect($bdd);
				?>
				<input type="text" name="proprietemessage" placeholder="Nouvelle propriété">
				<input type="submit"  name="mettreajour"  value = "Mettre à jour">
				</form>
            </div>
          </div>
        </div>
      </div>

	<!-- footer start -->
		<section style="position: relative; top: 362px; width: 100%" id="call-to-action">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div class="block">
				</div>
			  </div>
			</div>
		  </div>
		</section>
	<!-- footer close -->
  </body>
</html>