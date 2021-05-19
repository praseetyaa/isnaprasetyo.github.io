<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">
    <meta name="supported-color-schemes" content="dark light">
    <meta name="color-scheme" content="dark light">
    <meta name="theme-color" content="">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css" rel="stylesheet">
    <title>Isna Prasetyo</title>


	<link rel="manifest" href="manifest-light.webmanifest" data-href-light="manifest-light.webmanifest" data-href-dark="manifest-dark.webmanifest">      
    <link rel="icon" href="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Flight.png" data-href-light="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Flight.png" data-href-dark="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Fdark.png" sizes="144x144">
    <script type="module" src="https://googlechromelabs.github.io/dark-mode-toggle/src/dark-mode-toggle.mjs"></script> 
    <script>
	if (!window.matchMedia('(prefers-color-scheme)').matches) {
		document.documentElement.style.display = 'none';
		document.head.insertAdjacentHTML(
		    'beforeend',
		    '<link rel="stylesheet" href="light.css" onload="document.documentElement.style.display = ``">'
		);
	}
	const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
	darkModeMediaQuery.addListener((e) => {
		const darkModeOn = e.matches;
		console.log(`Dark mode is ${darkModeOn ? '🌒 on' : '☀️ off'}.`);
	});
    </script> 
	<style>
		fieldset {
		  background-color: gainsboro;
		}
		@media (prefers-color-scheme: dark) {
		  fieldset {
		    background-color: darkslategray;
		  }
		}
	</style>
	<!-- Google Oauth -->
	<meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id" content="921242163893-pnip8abdkt3sma4cu90mkj498g1v1sa1.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" href="assets/css/dark.css" media="(prefers-color-scheme: dark)">
	<link rel="stylesheet" href="assets/css/light.css" media="(prefers-color-scheme: light)">
	<link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body style="font-family: 'Spartan', sans-serif; " class="scrollbar">
	<nav class="navbar navbar-expand navbar-light shadow-0 fixed-top " id="nav">
	  <div class="container">
	    <div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link active-link active fw-bold p-0 m-2" aria-current="page" href="#intro">Intro</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active-link fw-bold p-0 m-2" href="#projects">Projects</a>
				</li>
			</ul>
	    	<ul class="nav navbar-nav mx-auto">
	    		<li class="nav-item"><dark-mode-toggle appearance="toggle"></dark-mode-toggle></li>
	    	</ul>
	    	<ul class="nav navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active-link fw-bold p-0 m-2" href="#about">About</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active-link fw-bold p-0 m-2" href="#contact">Contact</a>
		        </li>
	    	</ul>
	    </div>
	  </div>
	</nav>
  	<div class="container vh-100 align-items-center d-flex">
  		<div class="row vw-100">
  			<div class="col-lg-6 mx-auto">
		  		<div class="card p-3">
		  			<div class="card-body">
		  				<div class="heading mb-5">
			  				<h1 class="color-1">Welcome Back :)</h1>
			  				<p>To keep connected with us, please login with your personal information by email address and password 🔔</p>
			  			</div>
						<form>
						  <!-- Email input -->
						  	<div class="input-group d-flex mb-3">
						  	  <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
							  <div class="form-outline flex-fill">
							    <input type="email" id="form1Example1" class="form-control w-100" />
							    <label class="form-label" for="form1Example1">Email address</label>
							  </div>
							</div>

						  <!-- Password input -->
						  	<div class="input-group d-flex mb-3">
						  	  <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
							  <div class="form-outline flex-fill">
							    <input type="password" id="form1Example2" class="form-control w-100" />
							    <label class="form-label" for="form1Example2">Password</label>
							  </div>
							</div>

						  <!-- 2 column grid layout for inline styling -->
						  <div class="row mb-4">
						    <div class="col d-flex justify-content-center">
						      <!-- Checkbox -->
						      <div class="form-check">
						        <input
						          class="form-check-input"
						          type="checkbox"
						          value=""
						          id="form1Example3"
						          checked
						        />
						        <label class="form-check-label" for="form1Example3"> Remember me </label>
						      </div>
						    </div>

						    <div class="col">
						      <!-- Simple link -->
						      <a href="#!">Forgot password?</a>
						    </div>
						  </div>

						  <!-- Submit button -->
						  <div class="auth d-flex justify-content-between mb-3">
						  	<button type="submit" class="btn btn-theme w-100 rounded text-capitalize me-4">Login Now</button>
						  	<button type="submit" class="btn btn-theme-outline w-100 rounded text-capitalize">Create Account</button>
						  </div>
						  <p>Or you can join with</p>
						  <div class="auth">
						  	<div class="g-signin2 rounded" data-onsuccess="onSignIn"></div>
						  </div>

						  <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div>
							<a href="#" onclick="signOut();">Sign out</a>
							<script>
							  function signOut() {
							    var auth2 = gapi.auth2.getAuthInstance();
							    auth2.signOut().then(function () {
							      console.log('User signed out.');
							    });
							  }
							</script> -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.js"></script>
    <!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- app -->
	<script type="text/javascript" src="assets/js/app.js"></script>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
  </body>
</html>