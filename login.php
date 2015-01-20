<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to CechCalk</title>
  <link rel="stylesheet" href="asset/css/roboto/webfonts/roboto_regular_macroman/stylesheet.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="asset/css/normalize.css">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" type="text/css" href="">
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
     <?php
        if(isset($_GET['msglogin'])){
      ?>
        <p class="notification">
          <?php  echo $_GET['msglogin']; ?>
        </p>
      <?php
        }
      ?>
      <form action="userAuth.php" method="post">
        <label>
          <input type="text" name='username' placeholder="Username">
        </label>
        <label>
          <input type="password" name='password' placeholder="Password">
        </label>
        <label>
          <input type="checkbox"> Remeber Me
        </label><br>
        <input type="submit" value="Login">
      </form>
    </div>
    
    <!-- Register -->
    <div id="register" class="tab-target">
     <?php
        if(isset($_GET['msgregister'])){
      ?>
        <p class="notification">
          <?php echo $_GET['msgregister']; ?>
        </p>
      <?php
        }
      ?>
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
        </label><br>

        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</body>
<script>
    var tab = window.location.href.split('#');
    var trigger = document.querySelector(".login-tab-menu li a[href='#"+tab[1]+"']");
    tabHandler(trigger);
  </script>
</html>
