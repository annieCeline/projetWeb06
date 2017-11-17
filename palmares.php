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

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nobis, at neque nostrum. Dolorum porro totam aut cumque distinctio, ipsa, iusto sequi. Quis assumenda, repellendus.</p>
	</header>



	<main>


		<!-- LES RESEAUX SOCIAUX -->

		<section id="nav_laterale">

			<div id="reseaux_sociaux">
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</div>
			<div id="profil_recherche">
				<i class="fa fa-user" aria-hidden="true"></i>
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
		</section>





		<!--PALMARES -->

		<!--Section Web Doc-->

		<section id="sectionWebDoc">

			<h2>Web doc</h2>


			<ul class="thumbnails">
				<li data-tag="webdoc">
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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




		</section>

		<!--Section Web Serie-->

		<section id="sectionWebSerie">

			<h2>Web serie</h2>


			<ul class="thumbnails">
				<li data-tag="webserie">
					<a href="#"><img src="./assets/images/films/thumbnail/donottrack.png" alt="Do not Track">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
					<a href="#"><img src="./assets/images/films/thumbnail/Alma.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
					<a href="#"><img src="./assets/images/films/thumbnail/Alteration.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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





		</section>


		<!--Section Transmedia-->

		<section id="sectionTransmedia">

			<h2>Transmedia</h2>

			<ul class="thumbnails">
				<li data-tag="transmedia">
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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


		</section>

		<!--sectionProjet-->


		<section id="sectionProjet">

			<h2>Projet</h2>




			<ul class="thumbnails">
				<li data-tag="projet">
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
				<li data-tag="projet">
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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
				<li data-tag="projet">
					<a href="#"><img src="./assets/images/films/thumbnail/memories.png" alt="memories">
						<!--Hover info-->
						<div class="hoverInfo">
							<div class="infoFilm">
								<h3>Memories</h3>
								<h3>Jakob Gottschau</h3>
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

		</section>


	</main>


	<!--FOOTER-->

	<footer>
		<p>© Interface3 - 2017</p>
		<p>info@brusselswebfest.be</p>



	</footer>



</body>

</html>