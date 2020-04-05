<?php
if (isset($_GET['v'])) {
	$version = $_GET['v'];
	$filename = 'monoserver-'.$version.'-setup.exe';
	if (file_exists('binaries/'.$filename)) {
		// Activity log
		$log = date('dMy-h').'h'.date('i').' - '.$_SERVER["REMOTE_ADDR"].' - '.$_SERVER['HTTP_USER_AGENT'];
		file_put_contents('activity.log', $log.PHP_EOL, FILE_APPEND);

		// Download file
		$file = 'binaries/'.$filename;
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
	}
}
?>
<!doctype html>
<html lang="en">
	<head>
		<?php include_once('inc.meta.php') ?>
		<title>monoserver</title>
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

		<div id="intro">
			<div class="container">		

				<div class="row">
					<div class="col-lg-6 offset-lg-1">
						<p style="line-height:28px;">
							Portable<span style="color:red">*</span>, léger et intuitif, <i>monoserver</i> permet de travailler en mode client-serveur sur Windows.<br />
							Application éducative pour élèves de lycée (SNT/NSI) ou autodidactes.<br />
							HTML, CSS, Javascript, PHP
						</p>
						<p class="small" style="color:silver;"><span style="color:red">*</span> fonctionne depuis une clé USB ou un dossier, pas d'installation, pas de droits administrateur nécessaires</p>
						<p><b>Utilisation libre</b></p>			
					</div>		
					<div class="col-lg-4">
						<img src="images/monoserver-systray.png" alt="Systray Menu" />
					</div>					
				</div>
				
				<div class="row">
					<div class="col-lg-4 offset-lg-4 text-center">	
						<a href="?v=0.8" class="mt-3 text-center btn btn-warning font-weight-bold">TELECHARGER <i class="material-icons align-text-bottom">save_alt</i></a>
					</div>
				</div>
				
				<br />
				
			</div>				
		</div>				
				
		<div class="container">	
			
			<div class="row">
				<div class="col"><h3>AUTRES APPLICATIONS POUR APPRENDRE À CODER</h3></div>
			</div>
			<div class="row pt-5">
				<div class="col-lg-1 offset-lg-4">
					<a href="https://www.easyphp.org?s=monoserver" target="_blank"><img src="images/devserver-icon.png" width="50px;" /></a>
					<div style="position:absolute;top:-5px;left:70px;">
						<i class="fa fa-exclamation-circle" style="color:silver;width:15px;" data-toggle="tooltip" data-html="true" data-placement="top" title="" data-original-title="<b>EasyPHP Devserver</b><br />Devserver installe un environnement de développement complet (PHP, Apache, MySQL, PhpMyAdmin...), open source et prêt à l'emploi. Devserver est portable, modulaire, entièrement configurable et facile à mettre à jour."></i>
					</div>
				</div>
				<div class="col-lg-1">
					<a href="https://www.portabledevapps.net/python-portable.php?s=monoserver" target="_blank"><img src="images/python-portable-icon.png" width="50px;"></a>
					<div style="position:absolute;top:-5px;left:70px;"><i class="fa fa-exclamation-circle" style="color:silver;" data-toggle="tooltip" data-html="true" data-placement="top" title="" data-original-title="<b>Python Portable</b><br />Python Portable est une version portable de Python / Spyder pour Windows. Modules installés: Matplotlib, Pandas, Numpy, Sympy, Scipy, Cython, QtPy, Qtconsole ..."></i></div>
				</div>	
				<div class="col-lg-1">
					<a href="https://www.portabledevapps.net/jupyter-portable.php?s=monoserver" target="_blank"><img src="images/jupyter-portable-icon.png" width="50px;"></a>
					<div style="position:absolute;top:-5px;left:70px;"><i class="fa fa-exclamation-circle" style="color:silver;" data-toggle="tooltip" data-html="true" data-placement="top" title="" data-original-title="<b>Jupyter Lab Portable</b><br />Jupyter Lab Portable est une version portable de Jupyter Lab pour Windows."></i></div>
				</div>	
				<div class="col-lg-1">
					<a href="https://www.portabledevapps.net/?s=monoserver" target="_blank"><img src="images/latex-portable-icon.png" width="50px;"></a>
					<div style="position:absolute;top:-5px;left:70px;"><i class="fa fa-exclamation-circle" style="color:silver;" data-toggle="tooltip" data-html="true" data-placement="top" title="" data-original-title="<b>Latex Portable</b><br />Latex Portable est une version portable de Latex pour Windows. Composants: Miktex, TexMaker, GhostView ...."></i></div>
				</div>
			</div>
	
			<div class="row pt-5">
				<div class="col-lg-1 offset-lg-5" style="margin-bottom:0px;">
					<a href="https://www.webcodesniffer.net?s=monoserver" target="_blank"><img src="images/webcodesniffer.png" width="50px;"></a>
					<div style="position:absolute;top:-5px;left:70px;"><i class="fa fa-exclamation-circle" style="color:silver;" data-toggle="tooltip" data-html="true" data-placement="top" title="" data-original-title="<b>WebCodeSniffer</b><br />Validez votre code (PHP, CSS ou Javascript) et respectez les standards de codage."></i></div>				
				</div>		
				<div class="col-lg-1" style="margin-bottom:10px;">
					<a href="https://www.kodeshot.net?s=monoserver" target="_blank"><img src="images/kodeshot.png" width="50px;"></a>
					<div style="position:absolute;top:-5px;left:70px;"><i class="fa fa-exclamation-circle" style="color:silver;" data-toggle="tooltip" data-html="true" data-placement="top" title="" data-original-title="<b>Kodeshot</b><br />Convertissez votre code source en belles images pour vos articles, tweets, messages, messages ..."></i></div>
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