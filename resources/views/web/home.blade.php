<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Minecrosoft-Accueil</title>
	<!-- Latest compiled and minified CSS -->
	<script type="text/javascript" href="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/Style.css"
</head>

<body>
	<div class="container-fluid">
		<div class="row header">
			<div class="col-md-5 col-xs-6 pull-right">
				<nav id="navbar" class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-text" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="Index.html">RescueApp</a>
						</div>
						<div id="navbar-text" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-left">
								<li class="active"><a href="{{url('/home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-left">
								<li ><a href="{{url('/application')}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Application</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-left">
								<li><a href="#" download><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Téléchargement</a></li>
							</ul>
						</div>
					</div>
				</nav>
		</div>
	</div>
</div>
<div class="container-fluid marketing">
	<div class="row">

		<div class="col-md-offset-2 col-md-1 ">
			<a>
				<img class="img-responsive wow bounceIn center-block" src="./img/logo.png" alt="CNJE">
			</a>
		</div>
		<div class="col-md-offset-1 col-md-4">
			<h1><strong>Minecrosoft</strong></h1>
			<p><strong>Minecrosoft</strong> est une équipe participant à la nuit de l'info 2016. Elle représente l'Ecole des Mines de Saint-Étienne sur le Campus Georges Charpak Provence.</p>
		</div>



	</div>
</div>



<div class="container-fluid competences">
	<hr>
	<div class="row">
		<h2>Caractéristiques de l'application :</h2>
	</div>

	<div class="row">
		<div class="col-md-3 col-md-offset-1">
			<img src="./img/fb_icon_325x325.png" alt="Programmation" class="img-responsive img-circle center-block wow bounceIn" width="160" height="160" />
			<h4>Flux d'informations prioritaire</h4>
			<p>Les informations les plus pertinentes sont puisées dans toutes les sources officielles et traduites dans la langue de votre choix.</p>
		</div>

		<div class="col-md-4">
			<img src="./img/MSF.svg.png" alt="Application mobile" class="img-responsive img-circle center-block wow bounceIn" width="160" height="160" data-wow-delay=".1s" />
			<h4>Alerter les organismes</h4>
			<p>L'application  vous offre la posibilité de poster des informmations qui seront automatiquement transmise aux autorité compétentes.</p>
		</div>

		<div class="col-md-3">
			<img src="./img/google-maps-logo.jpg" alt="Electronique" class="img-responsive img-circle center-block wow bounceIn" width="160" height="160" data-wow-delay=".2s" />
			<h4>Localiser les abris</h4>
			<p>L'application propose une cartes des refuges autour de vous actualisée en temps réel.</p>
		</div>

	</div>

	<div class="row">
		<a href="application.html" type="submit" class="btn btn-info">En savoir plus</a>
	</div>
</div>


<div class="container-fluid ruban keynumber">
	<div class="row">
		<div class="col-md-3 col-md-offset-1">
			<img src="./img/badge_1st.png" alt="Chiffre d'affaires" class="img-responsive img-circle center-block wow bounceIn" width="80" height="80" data-wow-delay=".3s" />
			<p><strong>n°1 Rescue App</strong></p>
		</div>

		<div class="col-md-4">
			<img src="./img/free.jpg" alt="30 meilleures junior-entreprises" class="img-responsive img-circle center-block wow bounceIn" width="80" height="80" data-wow-delay=".4s" />
			<p><strong>Free</strong></p>
		</div>

		<div class="col-md-3">
			<img src="./img/logo.png" alt="Etudes" class="img-responsive center-block wow bounceIn" width="80" height="80" data-wow-delay=".5s" />
			<p><strong>Connecté au monde</strong></p>
		</div>
	</div>
</div>
<footer>
	<div class="container-fluid">
		<div class="row col-md-10 col-md-offset-1">
			<div id="copyright">
				<p class="pull-right"><a class="return-top" href="#">Retour en haut</a>
				</p>
				<p>&copy;2016 Minecrosoft &middot; Tous droits réservés.
				</p>
			</div>
		</div>
	</div>
</footer>

</div>

</div>

</body>
</html>
