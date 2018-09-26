<?php 
session_start();

$user = array(
	"nama" => "Nama",
	"username" => "admin",
	"password" => 1357,
	"notelp" => "081773388764"
);

if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: formawal.php");
}else {
	header("Location: login.php");
}
?>