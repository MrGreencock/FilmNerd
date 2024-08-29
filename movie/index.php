
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="hu">
<head>
	<title>FilmNerd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" media="all">
	<link rel="icon" type="image/png" href="pics/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-secondary">




<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<a class="navbar-brand" href="index.html">FilmNerd</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a></li>
			<li class="nav-item">
                <?php if(isset($user_data['user_name'])): ?>
                    <a class="nav-link" href="user_account.php"><?php echo $user_data['user_name']; ?></a>
                <?php else: ?>
                    <a class="nav-link" href="login.php">Jelentkezzen be!</a>
                <?php endif; ?>
            </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filmek</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="szineszek.html">Színész</a>
					<a class="dropdown-item" href="#">Műfaj</a>
					<a class="dropdown-item" href="#">Ország</a>
				</div>
			<li class="nav-item"><a class="nav-link" href="kritika.html" tabindex="-1" aria-disabled="true">Kritika (ideiglenesen)</a></li>
			<li class="nav-item"><a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Kijelentkezés</a></li>
		</ul>
		<form action="">
			<input class="form-control search" type="text" placeholder="Search.." name="search">
		</form>

	</div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="pics/pure_things.webp" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h3>Szegény párák</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			  </div>
		</div>
		<div class="carousel-item">
			<img src="pics/adelman.jpeg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h3>Adelmanék titka</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			  </div>
		</div>
		<div class="carousel-item">
			<img src="pics/cremator.png" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h3>A hullaégető</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			  </div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>


<!--
Jumbotron komponens
https://getbootstrap.com/docs/4.4/components/jumbotron/
-->
<div class="jumbotron jumbotron-fluid bg-info text-white">
	<div class="container-fluid wrapper">
		<h1 class="display-4">Bemutatkozás röviden</h1>
		<p class="lead">Egy filmrajongó, aki szeret weboldalt készíteni, illetve programozni. Összekötöm a kellemest a hasznossal, szokták mondani... A filmek iránti rajongás már családi hagyományak számít, legálábbis a dráma jellegű filmek iránt, mert mainstreamnek számító akció-, illetve szuperhősös filmekért annyira nem rajongok.</p>
		<details>
			<summary>További részlet</summary>
			<p> Haha beszoptad!</p>
		</details>

	</div>
</div>


<!--
Headingse
https://getbootstrap.com/docs/4.4/content/typography/#headings
-->
<h1 class="text-center text-white mb-6 display-1">Néhány film</h1>
<h3 class="text-center text-white mb-5">Amiket most néztem meg</h3> 
<div class="container-fluid wrapper">
	<div class="row">

		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="card text-white mb-4 bg-dark">
				<img src="pics/boldog_idok.jpeg" class="card-img-top" alt="">
				<div class="card-body">
					<h5 class="card-title text-center">Boldog idők</h5>
					<p class="card-text">Időutazás újragondolva.</p>
					<a href="#" class="btn btn-warning">Kritika</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="card text-white mb-4 bg-dark">
				<img src="pics/attenberg.jpeg" class="card-img-top" alt="">
				<div class="card-body">
					<h5 class="card-title text-center">Attenberg</h5>
					<p class="card-text">Ha a művészet határtalan, attől függetlenül legyen már története egy filmnek!</p>
					<a href="#" class="btn btn-warning">Kritika</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="card text-white mb-4 bg-dark">
				<img src="pics/lady_bird.jpg" class="card-img-top" alt="">
				<div class="card-body">
					<h5 class="card-title text-center">Lady Bird</h5>
					<p class="card-text">Egy anya-lánya közti nézeteltérések a helyzetük, a történések miatt.</p>
					<a href="#" class="btn btn-warning">Kritika</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row bg-secondary">
	<div class="col-sm-6 col-md-4 col-lg-3">
		<form action="action_page.php">
			<div class="container">
			  <h2>Iratkozz fel a hírlevelünkre!</h2>
			  <p>Lorem ipsum..</p>
			</div>
		  
			<div class="container">
			  <input class="newsletter" type="text" placeholder="Név" name="name" required>
			  <input class="newsletter" type="text" placeholder="Email cím" name="mail" required>
			  <label>
				<input type="checkbox" checked="checked" name="subscribe"> Elfogadom az Adatkezelési tájékoztatást
			  </label>
			</div>
		  
			<div class="container">
			  <input type="submit" value="Feliratkozok">
			</div>
		  </form>
	</div>
	<div class="col-sm-3 col-md-4 col-lg-3">
		<img class="newsletter-img" src="pics/subs.svg">
	</div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>