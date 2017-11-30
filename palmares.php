<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Palmares</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="./css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="./css/screenPalmares.css" />

	<link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700,700i" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>

		$(document).ready(function() {
            
                  $('nav > div').click(function(e) {
                $('nav > ul').toggleClass("visible");

            });

		

		});



	</script>


</head>




<body>

	<!--NAVIGATION -->

	<?php 
    include "./nav.php";
    ?>

	<!--HEADER-->

	<header>
		<h1>Le <br>Palmarès</h1>

		<p>Retrouvez le palmarès des &#156uvres plébiscitées par le public !</p>
	</header>



	<main>


		<!-- LES RESEAUX SOCIAUX -->

	        <!--NAVIGATION SOCIAUX ET PROFIL-->

        <div id="nav_laterale">
            <div id="profil_recherche">
                <a href="./login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div id="reseaux_sociaux">
                <a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
        </div>




		<!--PALMARES -->

		<!--Section Web Doc-->

		<section id="sectionWebDoc">


			<div class="thumbnailsContainer">



				<ul class="thumbnails">
					<li data-tag="webdoc">
						<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>These memories won't last</h3>
								<h3>Stuart Campbell</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>
					<li data-tag="webdoc">
						<a href="#"><img src="./assets/images/films/thumbnail/gentriville.png" alt="gentriville">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Gentriville</h3>
								<h3>Sterlin&amp;Walter</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>
					<li data-tag="webdoc">
						<a href="#"><img src="./assets/images/films/thumbnail/donottrack.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Do not track</h3>
								<h3>Brett Gaylor</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>


				</ul>
				<h2>Webdoc</h2>


			</div>


		</section>
		
		<hr noshade>

		<!--Section Web Serie-->

		<section id="sectionWebSerie">

			<div class="thumbnailsContainer">



				<ul class="thumbnails">
					<li data-tag="webserie">
						<a href="#"><img src="./assets/images/films/thumbnail/browngirls.png" alt="Do not Track">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Brown Girls</h3>
								<h3>Sam Bailey</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>

					<li data-tag="webserie">
						<a href="#"><img src="./assets/images/films/thumbnail/projet/frannerd.png" alt="Frannerd">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Frannerd</h3>
								<h3>Fran Meneses</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>
			


					<li data-tag="webserie">
						<a href="#"><img src="./assets/images/films/thumbnail/nanaroscope.png" alt="nanaroscope">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Nanaroscope</h3>
								<h3>Régis Brochier</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>


				</ul>


				<h2>Web série</h2>

			</div>

		</section>

        <hr noshade>

		<!--Section Transmedia-->

		<section id="sectionTransmedia">

			<div class="thumbnailsContainer">


				<ul class="thumbnails">
					<li data-tag="transmedia">
						<a href="#"><img src="./assets/images/films/thumbnail/legrandcomplot.png" alt="Le grand complot">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Le grand complot</h3>
								<h3>Junge Römer</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>
					<li data-tag="transmedia">
						<a href="#"><img src="./assets/images/films/thumbnail/Alma.png" alt="Alma, a tale of violence">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Alma, a tale of violence</h3>
								<h3>Ruben Korenfeld</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>
					<li data-tag="transmedia">
						<a href="#"><img src="./assets/images/films/thumbnail/seances.png" alt="seances">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Seances</h3>
								<h3>Guy Maddin</h3>
							</div>
							<div class="infosAnnexes">
								<div class="dateLieu">
									<h4></h4>
									<!--<h4>Cinema Galeries</h4>-->
								</div>
								<div class="moreInfo">
									<h4>More info</h4>
								</div>
							</div>
						</div>
					</a>
					</li>


				</ul>
				<h2>Transmedia</h2>

			</div>

		</section>


	</main>


	<!--FOOTER-->

	<footer>
		<p>© Interface3 - 2017</p>
		<p>info@brusselswebfest.be</p>



	</footer>



</body>

</html>