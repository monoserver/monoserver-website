<!doctype html>
<html lang="en">
	<head>
		<?php include_once('inc.meta.php') ?>
		<title>monoserver | actualités</title>
	</head>
	
	<body>
	
		<nav class="navbar navbar-expand navbar-light">
			<div class="container">
			
				<a class="navbar-brand" href="https://www.monoserver.io">
					<img src='images/monoserver.png' height='25px' alt='monoserver' />
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse pt-3" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="index.php" data-toggle="tooltip" data-placement="bottom" title="accueil"><i class="material-icons" style="font-size:24px;padding-left:0px;">home</i></a>
						<a class="nav-item nav-link" href="news.php" data-toggle="tooltip" data-placement="bottom" title="actualité"><i class="material-icons" style="font-size:23px;padding-left:0px;">notifications_active</i></a>
						<a class="nav-item nav-link" href="https://github.com/monoserver/monoserver-app/issues" target="_blank" data-toggle="tooltip" data-placement="bottom" title="aide / bug / idées"><i class="material-icons" style="font-size:21px;padding-left:0px;">help</i></a>
					</div>
					<div class="social-icons">	
						<a href="https://twitter.com/monoserverdotio" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
						<br style="clear:both;" />
					</div>
				</div>	

			</div>
		</nav>
		
		<br />
		
		<div class="container">
			<div class="row">
				<div class="col-6 offset-3">					
					<a class="twitter-timeline" data-chrome="noheader,nofooter,noborders" href="https://twitter.com/monoserverdotio?ref_src=twsrc%5Etfw">Tweets by monoserverdotio</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>					
					<br />
					<br />
				</div>				
			</div>				
		</div>	

		<?php include('inc.footer.php') ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script>
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})
		</script>	
		
		</body>
</html>