<?php
require "lib/validation/validation.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$validation = new Validation();
if ($validation->validate_username($username)&& $validation->validate_Email($email)
	 AND $validation->validate_Password($password)){
	echo "Semua data Valid";
}else { header("location:login.php?msgregister=Data Kurang Valit silahkan Coba lagi#register");
}
	
?>
