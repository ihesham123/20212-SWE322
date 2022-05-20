<?php
  session_start();

  // check cookie to auto logout
  if (!isset($_COOKIE['timer'])) {
    logout();   
  }

  // each activity update the time
  setcookie('timer', 'x', time()+600); 

  // if "user agent" and "session ip" not equal to the curent user, logout 
  if (isset($_SESSION['check']) && $_SESSION['check'] !=  hash('ripemd128', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'])) {
    logout();
  }

  // logout user when called
  function logout(){
    echo "<script> location.href='../php/logout.php'; </script>"; 
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  background-image: url("../src/img/background.png");
  background-repeat: no-repeat;
  background-size: fill;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;}

input {width: 150px;}

label {display: inline-block; width: 140px; text-align: center;}

h1 {
  text-align: center;
  font-family: cursive;
  padding-top: 50px;
  padding-bottom: 50px;}

h3,p {text-align: center; 
      font-family: cursive;}

#pwordMessage {color: red}

h1 {
	text-align: center;
  font-family: cursive;
	padding-top: 50px;
  padding-bottom: 50px;}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

.topnav {
  overflow: hidden;
  background-color: #333;}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;}

.topnav-right {
  float: right;
}

.topnav a:hover {
  background-color: #ddd ;
  color: black;}

* {
  box-sizing: border-box;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

</style>
</head>
<body>
<div class="topnav">
  <a href="../www/index.php">Home</a>
  <a href="../www/courses.php">Courses</a>
  <a href="../www/course_schedule.php">Schedule</a>
  <a href="../www/contact.php">Contact</a>
  <a href="../www/about.php">About</a>
  <div class="topnav-right">
    <?php
      if (isset($_SESSION['id'])) {
        echo "<a href='../www/account.php'>". $_SESSION['name']. "</a>";
        echo "<a href='../php/logout.php' >Log Out</a>";
      }else{
        echo "<a href='../www/login.php'>Login</a>";
        echo "<a href='../www/reg.php'>Register</a>";
      }
    ?>
  </div>
</div>
</body>
</html>