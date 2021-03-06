<?php
	session_start();
	if((isset($_SESSION['isLogin']) && ($_SESSION['isLogin'] == TRUE))){
		header('Location: php/account.php');
		exit();
	}
?>

<!doctype html>
<html lang="pl">
  <head>
    <title>WebApp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Damian Henisz, Michał Żakowski, Adam Wójcik">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
          <link href="css/full.css" rel="stylesheet" type="text/css">
          <link href="css/signing.css" rel="stylesheet" type="text/css">

  </head>

  <body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <nav class="navbar" style="padding-bottom: 150px;"> 
      	<!--padding na  200px lepiej wyglada -->
        <p id="Logo" class="navbar-brand"> <b> WEBAPP </b> </p>
          <p class="navbar-right" style="padding-top: 20px;" >
            <a href="php/registration.php">
            <button id="Rejestracja" type="button" class="btn btn-default btn-sm" > Rejestracja
              <i class="fa fa-user-circle"> </i>
                </button> 
                 </a>
               </p>
       </nav>

    <div class="row" >
      <div class="container padding=2">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4"></div>
        <div class="col-md-4 col-md-offset-4">
    		<div  id="Panel_log" class="panel panel-default">
			  	<div class="panel-heading">
                    <center> <h3 class="panel-title" > Logowanie </h3></center>
			 	</div>
			  	<div class="panel-body" >
			    	<form action = "/php/login.php" method = "post" accept-charset="UTF-8" role="form">
                    <fieldset>
              <div class="form-group">
                 <input class="form-control" placeholder="Login lub email" name="login" type="text">
               </div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Hasło" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox" style="color: #f3f3f3;" >
			    	    	<label>
			    	    		<input name="remember" type="checkbox" name="remember" value="Remember Me"> Zapamiętaj mnie
			    	    	</label>
			    	    </div>
			    	<input class="btn btn-lg btn-success btn-block" type="submit" value="Zaloguj się" style="background-color: #cc0033; cursor:pointer;">
			    	</fieldset>
			      	</form>
					<?php
						if(isset($_SESSION['loginError'])){
							echo $_SESSION['loginError'];
							unset($_SESSION['loginError']);
						}
					?>
					
			    </div>
			</div>
		</div>
        <div class="col-md-4 col-md-offset-4"></div>
	</div>
        </div>
</div>
  


  
  </body>
</html>
