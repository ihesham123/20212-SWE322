<?php require_once('../php/header.php');?>
<!DOCTYPE html>
<html>
<head>
<style>

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;}

input[type=submit] {
  background-color: #333;
  font-family: Arial Rounded MT;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;}

input[type=submit]:hover {
  background-color: whitesmoke;}
</style>
</head>

<body>
<div class="container">
  <div style="text-align:center">
    <h3>Contact Us</h3>
  </div>

    <div class="column">
      <img src="../src/img/contactUs.png" style="width:100%">
    </div>

    <div class="column">
      <form action="../www/index.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Saudi arabia">Saudi arabia</option>
          <option value="United arab emirates">United arab emirates</option>
          <option value="kuwait">kuwait</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
  </div>
</div>

</body>
</html>
