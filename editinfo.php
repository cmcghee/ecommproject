<?php
ini_set('display_errors', 1);
?>
<!DOCTYPE HTML>
<html>

    <!-- Scripts -->
		<script>
			function validate() {
				var name = document.getElementById('name').value;
				var email = document.getElementById('email').value;
				var password = document.getElementById('password').value;
				var retype = document.getElementById('retype').value;
				var address = document.getElementById('address').value;
				var city = document.getElementById('city').value;
				var state = document.getElementById('state').value;
				var zip = document.getElementById('zip').value;
				console.log(state);
				if (!isValidName(name) || !isValidEmail(email) || !isPasswordOk(password) || !aretwopasswordssame(password, retype) || !isValidAddress(address) || !isCityOk(city)|| !isStateSelect(state) || !isValidZipCode(zip)) {
					return
				} else {
					<?php
						$action = "insert.php";
					?>
				}
			}
			function isCityOk(city) {
				if (city.length === 0) {
					alert("City is required");
					return false;
				}
				var letters = /^[A-Za-z]+$/;
				if (!city.match(letters)) {
					alert("Only letters are allowed in city");
					return false;
				}
				return true;
			}
			function aretwopasswordssame(password, retype) {
				if (retype.length < 8) {
					alert("Please type password in the retype password field");
					return false;
				}
				if (password !== retype) {
					alert("Passwords should be the same");
					return false;
				}
				return true;
			}
			function isPasswordOk(password) {
				if (password.length < 8) {
					alert("Passwords should be 8 characters or more");
					return false;
				}
				return true;
			}
			function isStateSelect(state) {
				if (state === 'Change') {
					alert('Choose a valid state');
					return false;
				}
				return true;
			}
		</script>
		<script>
			function isValidZipCode(zip) {
				var isValid = /^[0-9]{5}(?:-[0-9]{4})?$/.test(zip);
				if (zip === "") {
					alert("Must enter a ZIP code")
					return false;
				}
				if (zip.length > 5 || zip.length < 5) {
					alert("ZIP code must be 5 digits long");
					return false;
				}
				if (!(isValid)) {
					alert('ZIP code is invalid - Please try again');
					return false;
				}
				return true;
			}
		</script>

		<script>
			function isValidName(name) {
				var myName = /^[A-Za-z\ \.]+$/;
				if (name.length === 0) {
					alert('Please enter your name')
					return false;
				}
				if (!name.match(myName)) {
					alert("Must enter a valid name");
					return false;
				}
				return true;
			}
		</script>


		<script>
			function isValidEmail(mail) {
				// if (/^\w+([\.-]?\w+)*@\w+([\.-]?\/w+)*(\.\w{2,3})+$/.test(mail))
				var expression = /^([a-zA-Z0-9\-\._]+)@(([a-zA-Z0-9\-_]+\.)+)([a-z]{2,3})$/;
				if (!(expression.test(mail))) {
					alert("Please enter a valid email address");
					return false;
				}
				// else
				// {
				// 	alert("Please enter a valid email address");
				// 	return false;
				// }
				return true;
			}

		</script>


		<script>
			function isValidAddress(address) {
				var addr = /^[a-zA-Z0-9\ \.\#\.\.\.]+$/.test(address);
				if (address === "") {
					alert("Please enter a street address");
					// address.focus();
					return false;
				}
				if (address.substring(0, 1) !== "0" && address.substring(0, 1) !== "1" && address.substring(0, 1) !== "2" && address.substring(0, 1) !== "3"
					&& address.substring(0, 1) !== "4" && address.substring(0, 1) !== "5" && address.substring(0, 1) !== "6" && address.substring(0, 1) !== "7"
					&& address.substring(0, 1) !== "8" && address.substring(0, 1) !== "9") {
					alert("Please enter a valid address 1");
					return false;
				}

				if(!address.match(/[a-zA-Z]/)){
					alert("Please enter a valid address");
					return false;
				}

				if (!addr) {
					alert("Please enter a valid address");
					return false;
				}
				return true;
			}
		</script>



  <head>
    <title>View Your Inforamtion</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/contact.css" />
  </head>
  <body class="is-preload">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header" class="alt">
          <a href="index.php"></a><span class="image featured"><img src="images/logo.png" width="50%" /></span>
          <nav id="nav">
            <ul>
              <li><a href="memberpage.php">Home</a></li>
              <li>
                <a href="#" class="icon fa-angle-down">Options</a>
                <ul>
                <li><a href="memberabout.html">View Profile</a></li> <!-- obviously needs to have a new link when we have it -->
                <li><a href="memberabout.html">About Us</a></li>
                <li><a href="membercontact.php">Contact</a></li>
                </ul>
                <li><a href="index.php">Logout</a></li>
            </ul>
          </nav>
        </header>

        

      <!-- Main -->
        <section id="main" class="container medium">
          <header>
            <h2>Edit Profile</h2>
          </header>


        <?php
            $dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");

            $query = "INSERT INTO currentusers (name, address, city, state, zipcode) WHERE email='firestone361@gmail.com' ('$_POST[name]', '$_POST[address]','$_POST[city]', '$_POST[state]', '$_POST[zipcode]')";
            $query1 = pg_query($dbconn, "SELECT * FROM currentusers WHERE email='firestone361@gmail.com'");

            $row = pg_fetch_row($query1);


        ?>


          <div class="box">
				<form method="POST" action="<?php echo $action; ?>">
					<div class="row gtr-50 gtr-uniform">
						<div class="col-6 col-12-mobilep">
							Name
							<input type="text" name="name" id="name" value="<?php echo "$row[2]" ?>" required=true/>
						</div>
						<div class="col-12">
							Address
							<input type="text" name="address" id="address" value="<?php echo "$row[4]" ?>"/>
						</div>
						<div class="col-4 col-12-mobilep">
							City
							<input type="text" name="city" id="city" value="<?php echo "$row[6]" ?>"/>
						</div>
						<div class="col-4 col-12-mobilep">
							State
							<select name="State" required id="state" value=<?php echo "$row[3]" ?>>
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
							</select>
						</div>
						<div class="col-4 col-12-mobilep">
							Zipcode
							<input type="text" name="zip" id="zip" value="<?php echo "$row[5]" ?>"/>
						</div>
						<div class="col-12">
							<ul class="actions special">
								<!-- <li><input type="submit" value="Sign Up" /></li> -->
								<input type="submit" value="submit" onclick="validate()" />
							</ul>
						</div>
					</div>
				</form>
			</div>
        
        <?php

        if (pg_query($dbconn,$query))  {
        $text = "Success";
        }

        else  {
        $text = "Error";
        }

        ?>
            

        </section>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>


</html>