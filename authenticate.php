<?php

$username = file_get_contents("username.txt");
$password = file_get_contents("password.txt");

if ($_POST["username"] === $username && $_POST["password"] === $password) {
  echo json_encode(array("success" => true));
} else {
  echo json_encode(array("success" => false));
}

?>
