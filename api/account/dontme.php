<?php
header('Content-Type: application/json');

echo '{ logout : "true"}';

setcookie("email", "", time() + (86400 * 30), "/");