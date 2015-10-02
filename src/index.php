<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Kévin Letupe</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/personalWebSite.css">
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
		
		<!-- Custom Theme JavaScript -->
    	
    	<script src="../js/jquery.js"></script>
<!--     	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->
    	<script src="../bootstrap/js/bootstrap.js"></script>
    	<script src="../js/PersonalWebSite.js"></script>
    	
	</head>
	<body id="page-top">
		
    	<script type="text/javascript">
// 		    $(document).ready(function(){
// 		        $(".portfolio-link").click(function(){
//         		    $("#portfolioModal1").modal('show');
//         		});
// 		    });
     	</script>
		
		<!--<?php include 'navBar.html';?>-->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header page-scroll"><a href="#page-top" class="navbar-brand">Le Savoir est une Arme !</a></div>
				
				<ul class="nav navbar-nav navbar-right">
					<li class="page-scroll"><a href="#projets">Projets</a></li>
					<li class="page-scroll"><a href="#CV">CV</a></li>
					<li class="page-scroll"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<img class="img-responsive" src="../img/image3344.png" alt="">
						<div class="intro-text">
                        	<span class="title">Kévin Letupe</span>
                        	<hr class="star-light">
                        	<span class="skills">Etudiant à Polytech'Lille - Java/Web développeur</span>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<section id="projets">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>Projets réalisés</h2>
						<hr class="star-primary">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-lg-offset-2 portfolio-item">
						<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
							<div class="caption">
                            	<div class="caption-content">
                                	<i class="fa fa-search-plus fa-3x"></i>
                            	</div>
                        	</div>
                        	<img src="../img/hat.png" alt="" class="img-res-pers">
						</a>
					</div>
					<div class="col-sm-4 portfolio-item">
						<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
							<div class="caption">
                            	<div class="caption-content">
                                	<i class="fa fa-search-plus fa-3x"></i>
                            	</div>
                        	</div>
                        	<img src="../img/rect3388.png" class="img-responsive" alt="">
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="CV">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>Curriculum Vitae</h2>
						<hr class="star-primary"/>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-lg-offset-2">
                    	<p>Je suis actuellement en dernière année en école d'ingénieur à Polytech Lille en <i>génie informatique et statistiques</i>. Ayant été très tôt passionné par l'informatique, j'ai efféctué un DUT informatique après mon lycée. Cela me permet d'avoir de bonne compétences techniques.</p>
                	</div>
                	<div class="col-lg-4">
                    	<p>Ma formation a Polytech me permet aussi d'avoir une double casquette informaticien/statisticien. Les données sont devenues de véritables mines d'informations. Cette double casquette est essentielle quand on sait qu'un des grands enjeux de l'informatique de demain est le data mining.</p>
                	</div>
				</div>
			</div>
		</section>
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>Contactez moi !</h2>
						<hr class="star-primary-c"/>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3">
						<form>
							<div class="form-group">
								<label for="contactMe-nom"> Nom</label>
								<input type="text" class="form-control" id="contactMe-nom" placeholder="Nom">
							</div>
							<div class="form-group">
								<label for="contactMe-prenom"> Prénom</label>
								<input type="text" class="form-control" id="contactMe-prenom" placeholder="Prénom">
							</div>
							<div class="form-group">
								<label for="contactMe-email"> Email</label>
								<input type="email" class="form-control" id="contactMe-email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="contactMe-num"> Numéro de téléphone</label>
								<input type="tel" class="form-control" id="contactMe-num" placeholder="Numero">
							</div>
							<div class="form-group">
								<label for="contactMe-num"> Message</label>
								<textarea class="form-control" rows="5" placeholder="Entrez votre message ici ..."></textarea>
							</div>
							 <button type="submit" class="btn btn-default">Envoyer</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="footer-above">
				<div class="container text-center">
					<div class="row">
						<div class="col-lg-3 col-lg-offset-3">
							<p>Kévin Letupe <br/>Etudiant à Polytech Lille<br/>Developpeur Java/Web</p>
						</div>
						<div class="col-lg-3">
							<p>Me suivre sur internet :</p>
							<a href="https://www.facebook.com/kletupe"><i class="fa fa-facebook-square fa-3x"></i></a>
							<a href="https://fr.linkedin.com/pub/k%C3%A9vin-letupe/8a/924/240"><i class="fa fa-linkedin-square fa-3x"></i></a>
							<a href="https://twitter.com/kevinn5914"><i class="fa fa-twitter-square fa-3x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php include 'projectModal.html';?>
	</body>
</html>