<?php
require "lib/validation/validation.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$validation = new Validation();

	if ($validation->validate_username($username)&& $validation->validate_Email($email)
		 && $validation->validate_Password($password)){
				header("location:login.php?msgregister=Register Sukses...  :D#register");

			$psql= new PDO ("pgsql:host=localhost;dbname=calk12;user=postgres;password=1234");

			$password = md5($password);
			$query =$psql->prepare ("INSERT INTO calker (username, password) VALUES ('$username','$password')");
			$query->execute();
		}
		else { header("location:login.php?msgregister=Data Kurang Valit silahkan Ulangi Kembali..!#register");
		}

			
		
?>