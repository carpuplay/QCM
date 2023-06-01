<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>QcmHub - Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./login.css">  
</head>

<?php
session_start(); //do not errase!!!
session_unset();
?>

<!-- partial:landing.partial.html -->
<nav class="full">
	<div class="underline"></div>
	<div class="underline"></div>
	<div class="underline"></div>
	<a class="header-cl" onClick="ul(0)" id="menu-1">Home</a>
  <a class="header-cl" onClick="ul(1)" id="menu-2">FAQ</a>
  <a class="header-cl" onClick="ul(2)" id="menu-3" >Qui sommes nous?</a>
  <a class="header-cl" onClick="ul(3)" id="menu-4">Orientation</a>
  <a class="header-cl" onClick="ul(4)" id="menu-5">Espace Élève</a>
	<script type="text/javascript">
		  document.getElementById("menu-1").onclick = function () {
			location.href = "../../index.html";
		  };
	  </script>
  
	<script type="text/javascript">
		  document.getElementById("menu-2").onclick = function () {
			location.href = "#";
		  };
	  </script>
  
	<script type="text/javascript">
	  document.getElementById("menu-3").onclick = function () {
		location.href = "#";
	  };
	</script>
  
	<script type="text/javascript">
	  document.getElementById("menu-4").onclick = function () {
		location.href = "#";
	  };
	</script>
  
	<script type="text/javascript">
	  document.getElementById("menu-5").onclick = function () {
		location.href = "../../index.html";
	  };
	</script>
</nav>
  
<body>
    <div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span id='SC'>Se connecter </span><span id='CC'>Créer un compte</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Se Connecter</h4>
                                            <form action="../../php-shit/php-files/verification.php" method="POST">
												
												<div class="form-group">
                                                <input type="hidden" name="prof" value="1">   
                                                        <input type="email" name="email" class="form-style" placeholder="Email"  autocomplete="on">
                                                        <i class="input-icon uil uil-at"></i>
                                                </div>	
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Mot de passe"  autocomplete="on">
                                                    <i class="input-icon uil uil-lock-alt"></i>
													
                                                </div>
                                                <input type="submit" class="btn mt-4" value="Se connecter">
                                            </form>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Mot de passe oublié?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Créer un compte</h4>
											<div class="form-group">
												<form action="../../php-shit/php-files/registration.php" method="POST">
													<input type="hidden" name="prof" value="1">
													<div class="form-group">
														<input type="text" name="username" class="form-style" placeholder="Identifiant"  autocomplete="off" 
														<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>>
														<i class="input-icon uil uil-user"></i>
													</div>	
													<div class="form-group mt-2">
														<input type="email" name="email" class="form-style" placeholder="Email"  autocomplete="on">
														<i class="input-icon uil uil-at"></i>
													</div>	
													<div class="form-group mt-2">
														<input type="password" name="password" class="form-style" placeholder="Mot de passe"  autocomplete="on" 
														<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?> >
														<i class="input-icon uil uil-lock-alt"></i>
													</div>
													<input type="hidden"  name="prof" value="1">
													<input type="submit" class="btn mt-4" value="Créer un compte" >
												</form>
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
	<script>
		var SC = document.getElementById('SC');
		var CC = document.getElementById('CC');
		var slider = document.getElementById('reg-log');

		SC.addEventListener('click', function() {
			if (slider.checked == true) {
				slider.checked = false;
			}
        });

		CC.addEventListener('click', function() {
            if (!(slider.checked == true)) {
                slider.checked = true;
            }
        });
	</script>

</body>
</html>
