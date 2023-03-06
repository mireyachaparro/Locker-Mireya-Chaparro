<?php
session_start();
?>
<html lang="en">
  <head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="custom.css">
		<script src="https://kit.fontawesome.com/6e0e39de35.js" crossorigin="anonymous"></script>
  </head>
  <body>
<?php
	include 'conn.php';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$email = $_POST['email']; 
	$password = $_POST['password'];
	$result = mysqli_query($conn, "SELECT Email, Password, Name FROM users WHERE Email = '$email'");
	$row = mysqli_fetch_assoc($result);
	$hash = $row['Password'];
	if (password_verify($_POST['password'], $hash)) {	
	//if ($_POST['password']== $hash) {	
		$_SESSION['loggedin'] = true;
		$_SESSION['name'] = $row['Name'];
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;	
		include "header2.php";
		echo "<div class='container'>";
		echo "<div class='row'>";
			echo "<div class='col-sm-12'>";
				echo "<h1> </h1>";
		echo "</div>";
		echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
		echo "<h3>Bienvenido <strong>$row[Name]</strong></h3><hr/>";
		echo "<a id='seis' href='alta.php'>Alta usuarios</a><br><br>";
		echo "<a id='seis' href='listar.php'>Baja y modificar usuarios</a><br><br>";
		echo "<a id='seis' href='logout.php'>Logout</a>";
		echo "</div>";
	} else {
	    echo "<div class='container'>";
		echo "<div class='row'>";
			echo "<div class='col-sm-12'>";
				echo "<h1> </h1>";
		echo "</div>";
		echo "</div>";
		echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
	    echo "<h3>Error</h3><hr/>";
		echo "Email o Password incorrectas.";
		echo "<p><a href='login.php'><strong>Intentar de nuevo</strong></a></p>";
		   echo "</div>";
	}	
?>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>
