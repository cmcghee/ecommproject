
<html>

<head>
	<title>Sign Up</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/signup.css" />
</head>

<body class="is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="index.php"></a><span class="image featured"><img src="images/logo.png" width="40%" /></span>
			<nav id="nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li>
						<a href="#" class="icon fa-angle-down">Menu</a>
						<ul>
							<li><a href="signup.php">Sign Up</a></li>
							<li><a href="login.html">Log In</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact</a></li>
							<!-- <li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li> -->
						</ul>
					<li><a href="index.php">Purchase</a></li>
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<section id="main" class="container medium">
			<header>
				<h2>Sign Up</h2>
			</header>
			<div class="box">
				<form name="insert" method="post" action="insert.php">
					<div class="row gtr-50 gtr-uniform">
						<div class="col-6 col-12-mobilep">
							Name
							<input type="text" name="name" id="name" value="" />
						</div>
						<div class="col-6 col-12-mobilep">
							Email
							<input type="email" name="email" id="email" value="" />
						</div>
						<div class="col-12">
							Password
							<input type="password" name="password" id="password" value="" />
						</div>
						<div class="col-12">
							Retype Password
							<input type="password" name="retype" id="retype" value="" />
						</div>
						<div class="col-12">
							Address
							<input type="text" name="address" id="address" value="" />
						</div>
						<div class="col-4 col-12-mobilep">
							City
							<input type="text" name="city" id="city" value="" />
						</div>
						<div class="col-4 col-12-mobilep">
							State
							<select name="State" required>
								<option value="Change">SELECT</option>
								<option value="AL">AL</option>
								<option value="AK">AK</option>
								<option value="AZ">AZ</option>
								<option value="AR">AR</option>
								<option value="CA">CA</option>
								<option value="CO">CO</option>
								<option value="CT">CT</option>
								<option value="DE">DE</option>
								<option value="DC">DC</option>
								<option value="FL">FL</option>
								<option value="GA">GA</option>
								<option value="HI">HI</option>
								<option value="ID">ID</option>
								<option value="IL">IL</option>
								<option value="IN">IN</option>
								<option value="IA">IA</option>
								<option value="KS">KS</option>
								<option value="KY">KY</option>
								<option value="LA">LA</option>
								<option value="ME">ME</option>
								<option value="MD">MD</option>
								<option value="MA">MA</option>
								<option value="MI">MI</option>
								<option value="MN">MN</option>
								<option value="MS">MS</option>
								<option value="MO">MO</option>
								<option value="MT">MT</option>
								<option value="NE">NE</option>
								<option value="NV">NV</option>
								<option value="NH">NH</option>
								<option value="NJ">NJ</option>
								<option value="NM">NM</option>
								<option value="NY">NY</option>
								<option value="NC">NC</option>
								<option value="ND">ND</option>
								<option value="OH">OH</option>
								<option value="OK">OK</option>
								<option value="OR">OR</option>
								<option value="PA">PA</option>
								<option value="RI">RI</option>
								<option value="SC">SC</option>
								<option value="SD">SD</option>
								<option value="TN">TN</option>
								<option value="TX">TX</option>
								<option value="UT">UT</option>
								<option value="VT">VT</option>
								<option value="VA">VA</option>
								<option value="WA">WA</option>
								<option value="WV">WV</option>
								<option value="WI">WI</option>
								<option value="WY">WY</option>
								<option value="AL">AL</option>
							</select>
						</div>
						<div class="col-4 col-12-mobilep">
							Zipcode
								<input type="text" name="zip" id="zip" value="" />
							</div>
						<div class="col-12">
							<ul class="actions special">
								<!-- <li><input type="submit" value="Sign Up" /></li> -->
								<li><input type="submit" value="Submit" onclick="validate()"/></li>
							</ul>
						</div>
					</div>
				</form>
			</div>
		</section>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
			function validate(){
				var name = document.getElementById('name').value;
				var email = document.getElementById('email').value;
				var password = document.getElementById('password').value;
				var retype = document.getElementById('retype').value;
				var address = document.getElementById('address').value;
				var city = document.getElementById('city').value;
				var state = document.getElementById('state').value;
				var zip = document.getElementById('zip').value;
				console.log(city);
				isCityOk(city);
				isPasswordOk(password);
				aretwopasswordssame(password,retype);
			}
			function isCityOk(city){
				if(city.length === 0){
					alert("City is required");
					return false;
				}
				var letters = /^[A-Za-z]+$/;
				if (!city.match(letters)){
					alert("Only letters are allowed");
					return false;
				}
				return true;
			}
			function aretwopasswordssame(password,retype){
				if(password !== retype){
					alert("passwords should be the same");
					return false;
				}
				return true;
			}
			function isPasswordOk(password){
				if(password.length() < 8){
					alert("passwords should be 8 characters or more");
				}
			}
		</script>
</body>
</html>