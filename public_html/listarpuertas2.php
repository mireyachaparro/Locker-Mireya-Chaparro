<!doctype html>
<html lang="en">
  <head>
    <title>Recoger</title>
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
                        $select = "SELECT id FROM puertas where estado='ocupado'";
                        $result = mysqli_query($conn, $select);
                        if($row = mysqli_fetch_array($result)){
                            $result = mysqli_query($conn, $select);
                                echo "Las puertas que están ocupadas son:";
                        echo "<br><br>";
                        while($row = mysqli_fetch_array($result)){
				echo "<a class='btn btn-success' href='comprobar2.php?id={$row['id']}'>Puerta {$row['id']}</a>";
				echo "<br><br>";
                        }}
                        else{
                                echo "Lo sentimos, no hay puertas ocupadas";
                        }
                ?>
                </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        </body>
</html>
