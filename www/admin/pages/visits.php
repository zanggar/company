<?php
session_start();
if(!isset($_SESSION['admin']))
{
 header("Location: ../../index.php");
}
else
{
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['admin']." and status=1");
$userRow=mysql_fetch_array($res);
?>
<html>
<head>
    <meta charset="utf-8"/>
<title>Welcome - Admin Page</title>
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
      <div class="col-xs-12">
          <?php 
    switch ($_GET['event'])
    {
        case "addvisits":
            echo "<p class='head_title'>Add Visits</p>";
            break;
        case "editvisits":
            echo "<p class='head_title'>Edit Visits</p>";
            break;
        default : echo "<p class='head_title'>Manage Visits</p>";
    }
     ?>
          <hr>
      </div>
      <div class="col-xs-2">
     <?php include '../menu/modul_menu.php'; ?>
</div>
<div class="col-xs-10">
    <?php 
    switch ($_GET['event'])
    {
        case "addvisits":
            include '../contents/visits_add.php';
            break;
        case "editvisits":
            include '../contents/visits_edit.php';
            break;
        default : include '../contents/visits_content.php';
    }
     ?>
</div>
  </div>
  <div class="row" id="footer">
  </div>
</div>
</body>
</html>
<?php
}
?>