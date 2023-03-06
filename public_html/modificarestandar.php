<?php
session_start();
?>
<!doctype html>

<html lang="en">
  <head>
    <title>Modificar estándar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo.jpg" type="image/jpg"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="custom.css">
  </head>
  <body>
<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {  
    } else {
            echo "<div class='container'>";
                echo "<div class='row'>";
                        echo "<div class='col-sm-12'>";
                                echo "<h1> </h1>";
                echo "</div>";
        echo "</div>";
echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
            echo "<h3>Error</h3><hr/>";
		    echo "Para tener acceso a esta página debes ser administrador.";
		    echo "<p><a href='login.php'><strong>Iniciar sesión</strong></a></p>";
		    echo "</div>";
            exit;
    }
        // checking the time now when home page starts
        $now = time();            
        if ($now > $_SESSION['expire'] )
        {
            
            session_destroy();
            echo "<div class='container'>";
                echo "<div class='row'>";
                        echo "<div class='col-sm-12'>";
                                echo "<h1> </h1>";
                echo "</div>";
        echo "</div>";
echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
            echo "<h3>Error</h3><hr/>";
		    echo "La sesión ha expirado.";
		    echo "<p><a href='login.php'><strong>Iniciar sesión de nuevo de nuevo</strong></a></p>";
		    echo "</div>";
		    exit;
        }
        include "header2.php";
?>
  <div class="container">
                <div class="row">
                        <div class="col-sm-12">
                                <h1> </h1>
                </div>
        </div>

<div class="col-sm-12 col-md-6 col-lg-6">
                       <h3>Modificar estándar</h3><hr/>
                        <?php
                        include "conn.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];
$consulta = mysqli_query($conn,"UPDATE users SET Name='$name',Email='$email' WHERE id='$id'");
echo "Usuario modificado correctamente.";
?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>
