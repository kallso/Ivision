
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<!-- header Nav Start -->
			<nav class="navbar navbar-default">                   
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				
					<a class="navbar-brand" href="index.php">
					<img src="img/logolong.png" alt="logo"/>
					</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				 
				</div>							                      
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.php" class="<?php if($page=='index'){echo 'active';}?>">
								<i class="material-icons">home</i>
								Accueil
							</a>
						</li>
						<li>
							<a href="work.php" class="<?php if($page=='work'){echo 'active';}?>">
								<i class="material-icons">print</i>
								Impression
							</a>
						</li>
						<li>										
							<a href="services.php" class="<?php if($page=='services'){echo 'active';}?>">
								<i class="material-icons">brush</i>
								Service
							</a>
						</li>
						<li>									
							<a href="Agence.php" class="<?php if($page=='Agence'){echo 'active';}?>">
								<i class="material-icons">face</i>
								L'agence
							</a>
						</li>
						<li>
							<a href="contact.php" class="<?php if($page=='contact'){echo 'active';}?>">
								<i class="material-icons">mail</i>
								Contact
							</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
