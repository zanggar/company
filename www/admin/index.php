<?php
session_start();
include_once '../db/dbconnect.php';

if(isset($_SESSION['admin'])!="")
{
 header("Location: pages/admin.php");
}
if(isset($_POST['btn-login']))
{
 $login = mysql_real_escape_string($_POST['login']);
 $upass = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM users WHERE email='$login'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass) && $row['status']==1)
 {
  $_SESSION['admin'] = $row['user_id'];
  header("Location: pages/admin.php");
 }
 else
 {
  ?>
        <script>alert('Invalid login or password');</script>
        <?php
 }
 
}
?>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css"/>
<link rel="stylesheet" href="../css/style.css"/>
<script src="../js/jquery-1.12.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<meta charset="utf-8"/>
<title>Company Visits</title>
</head>
<body>
<div class="container">
    <div class="content2"><p class="head_title" style="text-align: center;">Welcome to Admin Panel</p>
          <hr>
<div class="content">
    <div class="start">
        <form class="form-horizontal" method="post">
  <div class="form-group">    
<div class="input-group">
    <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1" style="position: initial;"></span>
  <input type="text" class="form-control" id="inputEmail3" placeholder="Login" name="login">
</div>
  </div>
  <div class="form-group">
      <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1" style="position: initial;"></span>
  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
</div>
  </div>
  <div class="form-group">
    <div class="input-group" style="width: 100%">
        <button type="submit" class="btn btn-success" name="btn-login" style="width: 100%">LOGIN</button>
    </div>
  </div>
</form>
    </div>
</div>
    </div>
</div>
</body>
</html>