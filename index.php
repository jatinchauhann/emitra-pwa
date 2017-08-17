<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();

if (isset($_POST['username']) and isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
  
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $count = mysqli_num_rows($result);
  if ($count == 2){
    $_SESSION['username'] = $username;
  }else{
    $fmsg = "Invalid Login Credentials.";
  }
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Dashboard
";
echo "<a href='logout.php'>Logout</a>";

}else{
  ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>E-Mitra | Rajasthan Government Services</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


  <link rel="shortcut icon" href="images/LOGO256.png">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="E-Mitra">
  <meta name="theme-color" content="#303F9F">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="E-Mitra">
  <meta name="apple-mobile-web-app-status-bar-style" content="#303F9F">

  <!-- Tile icon for Win8 -->
  <meta name="msapplication-TileColor" content="#3372DF">
  <meta name="msapplication-navbutton-color" content="#303F9F">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>



<meta name="keywords" content="E-Mitra Rajasthan Government, E-Services, Online Services, Government, Bhamashah, Online, Bill ,Payment, Services, Responsive, Progressive Web Application, Nucleon, Rajasthan Hackerearth, Hackathon, DigiFest, 2017" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- main -->
	<!--header-->
	<div class="header-w3l">
			<div class="center-container">
				<img src="/images/LOGO512.png" alt="">
				<h3>E-Mitra</h3><br>
				<h4>Rajasthan Government</h4>
			</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<h2>Login</h2>
			</div>
			<form action="#" method="post">
				<div class="pom-agile">
					<input placeholder="SSOID/Username" name="username" class="user" type="email" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input  placeholder="Password" name="password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					<h6><a href="#">Forgot Password?</a></h6>
					<div class="right-w3l">
						<input type="submit" value="Login">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		<p>&copy; 2017 E-Mitra Rajasthan Government. All rights reserved | Design by <a href="www.google.com">Nucleon</a></p>
	</div>
	<!--//footer-->
</div>

<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDvANQkC16Y-gxjtCgHsHV9IG67_SEZa9I",
    authDomain: "nucleon-ae53c.firebaseapp.com",
    databaseURL: "https://nucleon-ae53c.firebaseio.com",
    projectId: "nucleon-ae53c",
    storageBucket: "",
    messagingSenderId: "68393036110"
  };
  
  firebase.initializeApp(config);

  if('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js', { scope: '/' })
          .then(function(registration) {
                console.log('Service Worker Registered');
          });
        navigator.serviceWorker.ready.then(function(registration) {
           console.log('Service Worker Ready');
        });
      }

</script>
<script src="/__/firebase/4.1.3/firebase.js"></script>
<script src="/__/firebase/init.js"></script>

<script src="scripts/main.js"></script>

</body>
</html>
<?php } ?>