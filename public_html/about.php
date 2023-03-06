<!doctype html>
<html lang="en">
  <head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="custom.css">
  </head>
  <body>
	<?php
        include "header.php";
        ?>
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h1></h1>
			</div>
			</div>
		<div class="col-sm-12 col-md-6 col-lg-6">
                        <h3>About</h3><hr/>
		</div>
                        <p>Proyecto de Mireya Chaparro Nieto. Salesianos Atocha.<br>El proyecto consiste en hacer un conjunto de taquillas (en mi caso he hecho 3 taquillas).
He hecho una página web con dos botones: “guardar” y “recoger”. Cuando el cliente le de a “guardar”, se activará el script de escritura en el cual le asignará una contraseña aleatoria al NFC, la cual se guardará en la base de datos junto a la puerta que se ha abierto y la hora. También se actualizará en la tabla “puertas” hasta que el cliente recoja sus pertenencias. El script de escritura necesita escribir en la tabla “NFC” la contraseña de la NFC, la puerta asignada, la fecha y la hora. En la tabla “puertas”, en la puerta asignada, cambiará el estado “libre” a “ocupado”, y la cerradura asignada a esa puerta en la tabla “puertas” se abrirá y una vez cerrada, no se le va a poder abrir a otro cliente porque está “ocupada”. Cuando el cliente vuelva, se leerá la contraseña y lo comprueba en la base de datos con las contraseñas que ya hay. Con la fila de la tabla “NFC” que coincida, se cogerá esa puerta que tiene asignada y se abrirá la cerradura a la que está asignada en la tabla “puertas”, se abrirá la cerradura y se actualizará el estado de “ocupado” a “libre”. Para ver los materiales utilizados, haz clic <a id="tres" href='materiales.php'>aquí</a>.</p>	
<h9><i>              Escanea el código QR con tu móvil para descargar la memoria del proyecto</i></h9><br><br>
<div class="dropdown">
<img src="images/qr-code-2.png" alt="foto" width="100" height="100">
<div class="dropdown-content">
<img src="images/qr-code-2.png" alt="foto" width="400" height="400">
<div class="desc">Escanea el código QR con tu móvil para descargar la memoria del proyecto</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>
