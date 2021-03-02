<?php
session_start();
include_once './db/dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: online_editor.php");
}
        if(isset($_POST['btn-login']))
{
 $login = mysql_real_escape_string($_POST['login']);
 $upass = md5(mysql_real_escape_string($_POST['password']));
 $res=mysql_query("SELECT * FROM users WHERE email='$login' and password='$upass'");
 $row=mysql_fetch_array($res);
 if($row)
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: online_editor.php");
 }
 else
 {
     ?>
<script>alert("Invalid password or login!");</script>
         <?php
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
<title>Company</title>
</head>
<body>
        <div class="container-fluid" style="padding-left: 3%;padding-right: 3%;">
  <div class="row" id="header">
    <?php include 'header.php'; ?>
  </div>
  <div class="row" id="content">
      <div style="padding-left: 10%;padding-right: 10%;"><p class="head_title">Login</p>
        <hr></div>
    <div class="content2">     
        
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
     <div class="form-group"> 
    <div class="input-group" style="width: 100%">
        <table style="width: 100%">
            <tr>
                <td><a href="regist.php">Sign Up</a></td>
            </tr>
        </table>
          
          
    </div>
         </div>
</form>
</div>
</div>
</div>
  </div>
  <div class="row" id="footer">
  </div>
</div>
</body>
</html>