<?php
session_start();
include_once 'db/dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
else
{
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$row=mysql_fetch_array($res);
?>
<html>
<head>
    <meta charset="utf-8"/>
<title>Home Page</title>
<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../../css/style.css" type="text/css" />
<script src="../../js/jquery-1.12.1.min.js" type="text/javascript"></script>
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="container-fluid" style="padding-left: 3%;padding-right: 3%;">
  <div class="row" id="header">
    <?php include 'header.php'; ?>
  </div>
  <div class="row" id="content">
  <div style="padding-left: 10%;padding-right: 10%;"><p class="head_title">Meeting list</p>
        <hr></div>
    <?php
     switch ($_GET['event'])
    {
         case "case1";
               include 'content.php';
               break;
         default : include 'content.php';
    }
     ?>
  </div>
  <div class="row" id="footer">
  </div>
</div>
</body>
</html>
<?php
}
?>