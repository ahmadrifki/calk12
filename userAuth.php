<?php
  // require "database.php";
  require "lib/validation/validation.php";

$username = $_POST['username'];
$password = md5 ($_POST['password']);

 $validation = new Validation();
 if($validation->validate_is_not_null($username) && 
	$validation->validate_is_not_null($password)){

		$psql= new PDO ("pgsql:host=localhost;dbname=calk12;user=postgres;password=1234");
		$query = "SELECT * FROM calker WHERE username='$username' AND password='$password';";

		$load = $psql->query($query);
		$row = $load->rowcount();

		if ($row){
			header("location:user/dasboard.php");
				  }
				else{
				       header("location:login.php?msglogin=Login gagal#login");
				  }
	}
  	else{
    	header("location:login.php?msglogin=Username dan password tidak boleh kosong...!#login");
  	}

?>
