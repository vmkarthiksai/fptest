<?php
session_start();
require 'connection.php';
if(isset($_SESSION['cust_email']) && !empty($_SESSION['cust_email'])){
$cust_email = $_SESSION['cust_email'];
$get_cust_data = mysqli_query($connection, "SELECT * FROM `cust` WHERE cust_email = '$cust_email'");
$custData =  mysqli_fetch_assoc($get_cust_data);
}else{
header('Location: signout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<title>Home Page</title>
<style>
a, a:visited{
color: #0000EE;
}
a:hover{
color: #EE0000;
}
</style>
</head>
<body>
<header>
	<div class="top">
			<a href="login.php">Logout</a>
			<a href="homepage.php">Home</a>
	</div>
<div class="container">
<h1>Hello, <?php echo $custData['cname'];?></h1>
<a href="signout.php">Logout</a>
</div>
</header>
</body>
</html>