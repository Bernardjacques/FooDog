<html>
 	<head>
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/404.css" type="text/css">
 	<title>Erreur HTTP</title>
 	</head>
 	<body>
 		<h2>Erreur HTTP 404, la page <?=$REQUEST_URI?> n'existe pas.</h2>
		<p>
			<img src="assets/images/4042.png">
			<?php
				if (!empty($_SERVER['HTTP_REFERER'])) {
				echo '<p><a href="'.$_SERVER['HTTP_REFERER'].'">Retour page précédente</a></p>';
				}
			?>
		</p>
 	</body>
 </html>