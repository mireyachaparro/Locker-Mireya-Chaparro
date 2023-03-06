<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"">
	<link rel="stylesheet" href="custom.css">
	<script src="https://kit.fontawesome.com/6e0e39de35.js" crossorigin="anonymous"></script>
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
        </div></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="loginBox">
						<i class="fas fa-key fa-7x"></i>
					</div>
					<div class="loginBox">
						<form action="check-login.php" method="post">
							<div class="form-group">
							<input type="email" id="cuatro" class="form-control input-lg" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
							<input type="password" id="cuatro" class="form-control input-lg" name="password" placeholder="Password" required>       
							</div>
							<button type="submit" id="cinco" class="btn btn-success btn-block">Log in</button>
						</form>
  					   	</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>
