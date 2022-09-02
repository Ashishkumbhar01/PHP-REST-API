<?php
require('php/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Rest API</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="search">
    <div class="nav">
      <h2>Contact List</h2>
    </div>
    <form action="" method="get">
      <input type="search" name="search" id="search" placeholder="Search...">
      <input class="btn" type="submit" name="search" value="Search">
    </form>
  </div>
  
  <div class="form d-none">
    <div class="add">
      <form method="post">
      <label for="user">Name:</label>
      <input type="text" id="user" name="name" placeholder="Enter your full name..." required>
      <label for="phone">Mobile No:</label>
      <input type="tel" id="phone" name="mobile" placeholder="Enter your mobile number..." required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your Email address..." required>
      <input class="btn" type="submit" id="submit" name="submit" value="Add">
      </form>
    </div>
  </div>
 
 <div class=""> 
  <table>
    <tr>
      <th>Name</th>
      <th>Mobile No</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>Sushil Kumar</td>
      <td>9900774365</td>
      <td>kumarsushil@gmail.com</td>
      <td>
<a class="btn edt" id="edit" href="#">Edit</a>
 <a class="btn dlt" id="delete" href="#">Delete</a>      
</td>
    </tr>
  </table>
 </div>
 <div class="box">
 <div class="model-box d-none">
   <h2>Update Contact List</h2>
   <div class="inputs">
     <label for="name">Name:</label>
     <input type="text" name="name" id="name" value="sushil">
     <label for="mobile">Mobile No:</label>
     <input type="tel" name="mobile" id="mobile" value="sushil">
     <label for="email">Email:</label>
     <input type="email" name="email" id="email" value="sushil">
     <input class="btn" type="submit" name="save" id="save" value="Update">
   </div>
 </div>
 </div>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
