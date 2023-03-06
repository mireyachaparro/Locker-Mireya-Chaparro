<?php
session_start();
?>
<!doctype html>

<html lang="en">
  <head>
    <title>Modificar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo.jpg" type="image/jpg"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
                <link rel="stylesheet" href="custom.css">
		<script src="https://kit.fontawesome.com/6e0e39de35.js" crossorigin="anonymous"></script>
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
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-6">
                        <?php
			//echo "<h3>Modificar administrador</h3><hr/>";
                        include "conn.php";
                        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                        if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                        }
			$id = $_GET['id'];
                        $select = "SELECT tipo FROM users WHERE id=$id";
                        $result = mysqli_query($conn, $select);
			$tipo = mysqli_fetch_array($result);
			if($tipo['tipo'] == "admin"){
				$select1 = "SELECT * FROM users WHERE id=$id";
                        	$result1 = mysqli_query($conn, $select1);
				while($row = mysqli_fetch_array($result1)){
					echo "<h3>Modificar administrador</h3><hr/>";
					echo "<form method='post' action='modificaradmin.php' method='post'>";
					echo "{$row['Name']}";
                        		echo "<div class='form-group'>";
                                	echo "<input type='text' class='form-control' name='name' placeholder='Introduce tu nombre' required>";
                 			echo " </div>";
					echo "{$row['Email']}";
                  			echo "<div class='form-group'>";
                                	echo "<input type='email' class='form-control' name='email' aria-describedby='emailHelp' placeholder='Introduce tu email' required>";
                        		echo "</div>";
					echo "Paswword:";
					echo "<div class='form-group'>";
                                	echo "<input type='password' class='form-control' name='password' placeholder='Introduce Password' required>";
                        		echo "</div>";
					echo "<input type='hidden' name='id' value='$id'><br>";
                  			echo "<input type='submit' class='btn btn-success btn-block' value='Actualizar'>";
                			echo "</form>";

				}
			}
			elseif($tipo['tipo'] == "estandar"){
                               $select2 = "SELECT * FROM users WHERE id=$id";
                                $result2 = mysqli_query($conn, $select2);
                                while($row = mysqli_fetch_array($result2)){
					echo "<h3>Modificar estándar</h3><hr/>";
                                        echo "<form method='post' action='modificarestandar.php' method='post'>";
                                        echo "{$row['Name']}";
                                        echo "<div class='form-group'>";
                                        echo "<input type='text' class='form-control' name='name' placeholder='Introduce tu nombre' required>";
                                        echo " </div>";
                                        echo "{$row['Email']}";
                                        echo "<div class='form-group'>";
                                        echo "<input type='email' class='form-control' name='email' aria-describedby='emailHelp' placeholder='Introduce tu email' required>";
                                        echo "</div>";
                                        echo "<input type='hidden' name='id' value='$id'><br>";
                                        echo "<input type='submit' class='btn btn-success btn-block' value='Actualizar'>";
                                        echo "</form>";

                                }}
				?>
                </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
