<html>
 <head>
  <title>Prueba Heroku Daniel</title>
 </head>
 <body>
 <?php 
	if (isset($_GET['nombre'])) {
		echo '<h1>¡Hola ' .$_GET['nombre'].'!</h1>';
	} else {
		echo '<h1>¡Hola Mundo!</h1>' 
	}
 ?>
 </body>
</html>
