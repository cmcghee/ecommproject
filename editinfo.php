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


          <div class="box">
            <form method="post" action="email.php">
              <div class="row gtr-50 gtr-uniform">
                <div class="col-6 col-12-mobilep">
                  <input type="text" name="name" id="name" value="" placeholder="Name" />
                </div>
                <div class="col-6 col-12-mobilep">
                  <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
                <div class="col-12">
                  <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
                </div>
                <div class="col-12">
                  <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                </div>
                <div class="col-12">
                  <ul class="actions special">
                    <button type="submit" name="submit" class="button">Send Message</button>
                  </ul>
                </div>
              </div>
            </form>
          </div>


            <?php
            $dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");

            $query = pg_query($dbconn, "INSERT INTO currentusers WHERE email='firestone361@gmail.com'");
                $row = pg_fetch_row($query);
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