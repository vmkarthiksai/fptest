<?php
if(isset($_POST['cust_email']) && isset($_POST['cust_password'])){

if(!empty(trim($_POST['cust_email'])) && !empty(trim($_POST['cust_password']))){

$cust_email = mysqli_real_escape_string($connection, htmlspecialchars(trim($_POST['cust_email'])));

$query = mysqli_query($connection, "SELECT * FROM `cust` WHERE cust_email = '$cust_email'");

if(mysqli_num_rows($query) > 0){

$row = mysqli_fetch_assoc($query);
$cust_db_pass = $row['cust_password'];

$check_password = password_verify($_POST['cust_password'], $cust_db_pass);

if($check_password === TRUE){
session_regenerate_id(true);
$_SESSION['cust_email'] = $cust_email;  
	header('Location: thehome.php');
}
else{
$error_message = "Incorrect Email Address or Password.";
}
}
else{
$error_message = "Incorrect Email Address or Password.";
}
}
else{
$error_message = "Please fill in all the required fields.";
}
}
?>