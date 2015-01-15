<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="asset/css/roboto/web%2520fonts/roboto_regular_macroman/stylesheet.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

     <title>Welcome to Calk</title>
</head>
<body>
    
    <div class='login-form'>
    <ul class="login-tab-menu clear">
      <li class="active"><a href="#login" onclick="tabHandler(this)">Login</a></li>
      <li><a href="#register" onclick="tabHandler(this)">Register</a></li>
    </ul>
    <!-- Login    -->
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