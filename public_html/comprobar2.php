<!doctype html>
<html lang="en">
  <head>
    <title>Recoger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo.jpg" type="image/jpg"/>
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
                                <h1> </h1>
                </div>  
        </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                       <h3>Recoger</h3><hr/>
                        <?php
			include "conexion2.php";
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			if (!$conn) {
                		die("Connection failed: " . mysqli_connect_error());
        		}
			$id = $_GET['id'];
			$query="SELECT * FROM puertas where id='$id' and estado='ocupado'";
			$result2 = mysqli_query($conn,$query);
			$query3="SELECT estado FROM puertas where id='$id' and estado='libre'";
                        $result3 = mysqli_query($conn,$query3);

			if($row = mysqli_fetch_assoc($result2)){
				echo "Recogido en la puerta ";
				echo "$id";
				echo "<br>";
				if($id == 1){
				    $nfc = "317646021684";
				}
				if($id == 2){
				    $nfc = "155092200228";
				}
				if($id == 3){
				    $nfc = "453791954287";
				}
				echo "El id de su NFC es: ";
				echo "$nfc";
                    $query5="UPDATE puertas SET estado='libre' WHERE id='$id'";
                        $result5 = mysqli_query($conn,$query5);
                        echo "<br><br><a href='listarpuertas2.php'>Volver a listar las puertas ocupadas</a>";
			}elseif($row = mysqli_fetch_array($result3)){
                                echo "La puerta $id existe pero está ocupada";
				echo "<br>";
				echo "<a href='listarpuertas2.php'>Volver a listar las puertas ocupadas</a>";
                        }else{
				echo "La puerta $id no existe";
				echo "<br>";
				echo "<a href='listarpuertas.php'>Volver a listar las puertas libres</a>";
				}

		?>
                </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        </body>
</html>

