<?php
session_start();
include_once './db/dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
if(isset($_POST['btn-login']))
{
$f_name = mysql_real_escape_string($_POST['f_name']);
$login = mysql_real_escape_string($_POST['login']);
$email = $_POST['email'];
$password = md5(mysql_real_escape_string($_POST['password']));
$res=mysql_query("SELECT * FROM users where email='".$email."'");
if(mysql_num_rows($res) >0)
 {
   ?>
        <script>alert('A user with this login or email already exists');</script>
        <?php
 }
else
{
    if(mysql_query("INSERT INTO users (full_name,email,password,status) VALUES ('$f_name','$email','$password',1)"))
 {
      //  $_SESSION['user'] = $row['user_id'];
        header("Location: index.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
}

?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta charset="utf-8"/>
<title>Online Testing</title>
</head>
<body>
 <div class="container-fluid" style="padding-left: 3%;padding-right: 3%;">
  <div class="row" id="header">
    <?php include 'header.php'; ?>
  </div>
     <div class="row" id="content">
      <div style="padding-left: 10%;padding-right: 10%;"><p class="head_title">Sign Up</p>
        <hr></div>
    <div class="content2" style="width: 40%;">           
<div class="content">
    <div class="start">
<form class="form-horizontal" method="post">
  <div class="form-group">
    <label for="inputFulname3" class="col-sm-3 control-label">Full name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputf_name" placeholder="Full name" name="f_name">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
    <div class="col-sm-9">
        <input type="email" class="form-control" id="inputemail" placeholder="email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Password:</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group" style="width: 100%">
      <button type="submit" class="btn btn-success" name="btn-login" style="width: 100%">Sing Up</button>
    </div>
  </div>
</form>
    </div>
</div></div></div></div>
</body>
</html>