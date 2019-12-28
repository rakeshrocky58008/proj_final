<?php
$dbconnect = new mysqli('localhost','root','','vm_migration');
echo $dbconnect->connect_error;

$query = "SELECT vm_id FROM vm_table where vm_id=2";
//$res = $dbconnect-> query($query);
$res = mysqli_query($dbconnect,$query);
$row = mysqli_fetch_assoc($res);
   //echo $row["vm_id"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
 
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
   background: url(images1.jpg) no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
</style>
  <body>
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password">
  </div>  

  <input type="button" onclick="window.location.href = 'main.php';" class="btn" value="Sign in">  

</div>
  </body>
</html>
