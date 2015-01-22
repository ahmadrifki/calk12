<?php
  // require "database.php";
  require "lib/validation/validation.php";

$username = $_POST['username'];
$password = $_POST['password'];

 $validation = new Validation();
 if($validation->validate_username($username) && 
	$validation->validate_username($password)){

		$psql= new PDO ("pgsql:host=localhost;dbname=calk12;user=postgres;password=1234");
		$query = "SELECT username,password FROM calker WHERE username='$username' AND password='$password';";

		$load = $psql->query($query);
		$row = $load->rowcount();

		if ($row){
			echo "Welcome To Your Dashboard";
				  }
					else{
				       header("location:login.php?msglogin=Login gagal#login");
				   	}
}
  	else{
    	header("location:login.php?msglogin=Username dan password tidak boleh kosong#login");
  	}

?>
