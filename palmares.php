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

		$("nav ul li a").on("click", function() {
			$(this).siblings().toggleClass('active');
			
		});
			
			
				$(function() {
					var pgurl = window.location.href.substr(window.location.href
						.lastIndexOf("/") + 1);
					$("#nav ul li a").each(function() {
						if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
							$(this).addClass("active");
					})
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

	        <!--NAVIGATION SOCIAUX ET PROFIL-->

        <div id="nav_laterale">
            <div id="profil_recherche">
                <a href="./login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div id="reseaux_sociaux">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </div>




		<!--PALMARES -->

		<!--Section Web Doc-->

		<section id="sectionWebDoc">


			<div class="thumbnailsContainer">



				<ul class="thumbnails">
					<li data-tag="webdoc">
						<a href="#"><img src="./assets/images/films/thumbnail/projet/Pass%C3%A9sauvage.png" alt="memories">
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
				<h2>Webdoc</h2>


			</div>


		</section>

		<!--Section Web Serie-->

		<section id="sectionWebSerie">

			<div class="thumbnailsContainer">



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


				<h2>Web série</h2>

			</div>

		</section>


		<!--Section Transmedia-->

		<section id="sectionTransmedia">

			<div class="thumbnailsContainer">


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
				<h2>Transmedia</h2>

			</div>

		</section>

		<!--sectionProjet-->


		<section id="sectionProjet">

			<div class="thumbnailsContainer">





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

				<h2>Projet</h2>

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