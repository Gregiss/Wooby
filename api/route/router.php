<?php
header('Content-Type: application/json');
$router = $_POST['router'];

if($router == "/login"){
	include '/login'
}