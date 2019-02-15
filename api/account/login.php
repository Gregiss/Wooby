<?php
header('Content-Type: application/json');

if(empty($_COOKIE['email'])){
if(empty($_POST['email'])){
	echo '{ email : "blank"}';
}
else if(isset($_POST['email'])){
	echo '{ email : "true"}';
	setcookie("email", $_POST['email'], time() + (86400 * 30), "/");
}
}
else{
	
}