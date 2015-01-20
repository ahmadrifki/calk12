<?php
require "lib/validation/validation.php";

$username = $_POST['username'];
$password = $_POST['password'];

$validation = new Validation();
if ($validation->validate_username($username)
	 AND $validation->validate_Password($password)){
	echo "Semua data Valid";
}else { 
	header("location:login.php?msglogin=Username dan Password salah silahkan Coba lagi#login");
}
	


?>
