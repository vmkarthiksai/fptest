<?php
session_start();
require 'connection.php';
require 'login_process.php';
if(isset($_SESSION['cust_email'])){
header('Location: thehome.php');
exit;
}
?>
<html>
<head>	
<title>Login Page</title>
<link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>
<body>
	<div class="top">
			<a href="login.php">Login</a>
			<a href="homepage.php">Home</a>
	</div>
<form action="homepage.php" method="post"><br><br><br><br><br><h2>-FP TEST-</h2><br><br><br><br>
<h2>Customer Login</h2>
<div class="container">
<label for="email"><b>Email</b></label> 
<input type="email" placeholder="Enter email" id="email" name="cust_email" required>
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="cust_password" required>
<button type="submit">Login</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
</form>
</body>
</html>