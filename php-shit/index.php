<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>QcmHub - Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./login.css">  
</head>
<?php
session_start(); //esto sirve para destruir ñla info que queda del user si vuelve a la pagina de inicio (log in)
if (isset($_SESSION["message"]))
{
    print("<h1>".$_SESSION["message"]."</h1>");

}
unset($_SESSION['identifiant']);
unset($_SESSION['droits']);
unset($_SESSION["message"]);
session_unset();
?>
<!-- partial:landing.partial.html -->
<nav class="full">
	<div class="underline"></div>
	<div class="underline"></div>
	<div class="underline"></div>
	<a onClick="ul(0)" id="menu-1">Home</a><a onClick="ul(1)" id="menu-2">Login</a><a onClick="ul(2)" id="menu-3" >Qui somme nous?</a><a onClick="ul(3)" id="menu-4">Community</a><a onClick="ul(4)" id="menu-5">Channels</a>
	
	<script type="text/javascript">
		  document.getElementById("menu-1").onclick = function () {
			  location.href = "../landing-page/landing.html";
		  };
	  </script>
  
	<script type="text/javascript">
		  document.getElementById("menu-2").onclick = function () {
			  location.href = "../login/login.html";
		  };
	  </script>
  
	<script type="text/javascript">
	  document.getElementById("menu-3").onclick = function () {
		location.href = "../login/login.html";
	  };
	</script>
  
	<script type="text/javascript">
	  document.getElementById("menu-4").onclick = function () {
		location.href = "../login/login.html";
	  };
	</script>
  
	<script type="text/javascript">
	  document.getElementById("menu-5").onclick = function () {
		location.href = "../login/login.html";
	  };
	</script>
</nav>
  
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="verification.php" method="POST">
                                                <div class="form-group">
                                                    
                                                        <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="on">
                                                        <i class="input-icon uil uil-at"></i>
                                                </div>	
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="on">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" value="Se connecter ">
                                            </form>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a href="./spe-select/spe-select.html" class="btn mt-4">submit</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
<!-- partial -->
	<div class="slider-thumb"></div>
  	<script  src="./login.js"></script>

</body>
</html>