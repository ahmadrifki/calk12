<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to CechCalk</title>
  <link rel="stylesheet" href="asset/css/roboto/webfonts/roboto_regular_macroman/stylesheet.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="asset/css/normalize.css">
  <link rel="stylesheet" href="asset/css/style.css">
  <script src="asset/js/login.js"></script>
</head>
<body>
  <div class='login-form'>
    <ul class="login-tab-menu clear">
      <li class="active"><a href="#login" onclick="tabHandler(this)">Login</a></li>
      <li><a href="#register" onclick="tabHandler(this)">Register</a></li>
    </ul>
    <!-- Login  -->
    <div id="login" class="tab-target">
      <form action="userAuth.php" method="post">
        <label>
          <input type="text" name='username' placeholder="Username">
        </label>
        <label>
          <input type="password" name='password' placeholder="Password">
        </label>
        <label>
          <input type="checkbox"> Remeber Me
        </label>
        <input type="submit" value="Login">
      </form>
    </div>
    
    <!-- Register -->
    <div id="register" class="tab-target">
      <form action="userRegistration.php" method="post">
        <label>
          <input type="text" name='username' placeholder="Username">
        </label>
        <label>
          <input type="email" name='email' placeholder="Email">
        </label>
        <label>
          <input type="password" name='password' placeholder="Password">
        </label>
        <label>
          <input type="checkbox"> Show Password
        </label>
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</body>
</html>

// <?php

// Connected Database ==>

// $host='localhost';
// $dbname='calk12';
// $username='postgres';
// $password='1234';
// $port='5432';

// $psql= new PDO ("pgsql:host=$host;dbname=$dbname;user=$username;password=$password");


// eksekusi ==>

// $username = $_POST['username'];
// $password = $_POST['password'];

// $query =$psql->prepare ("INSERT INTO calker (username, password) VALUES ('$username','$password')");
// $query->execute(); 

// ?>