<?php require_once('../php/header.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
<center>

<h1> LOGIN </h1>

<form action="../php/login_auth.php" method="post">
  <label> Enter Your Email: </label>
  <input type="text" name="email" id="EmailAdress" placeholder="Email Adress"><br><br>

  <label> Enter Your Password: </label>
  <input type="Password" name="pword" id="Password" placeholder="Password"><br><br>

  <input type="submit" value="Login"/>

</form> </center>

</body>
</html>