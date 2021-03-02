<?php
session_start();
include_once '../../db/dbconnect.php';
if(!isset($_SESSION['admin']))
{
 header("Location: ../../index.php");
}
else
{
$res=mysql_query("SELECT * FROM users WHERE status=1");
$userRow=mysql_fetch_array($res);
?>
<html>
<head>
    <meta charset="utf-8"/>
<title>Welcome</title>
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
        case "addcompany":
            echo "<p class='head_title'>Add Company</p>";
            break;
        case "editcompany":
            echo "<p class='head_title'>Edit Company</p>";
            break;
        default : echo "<p class='head_title'>Manage Company</p>";
    }
     ?>
          <hr>
      </div>
      <div class="col-xs-2">
     <?php include '../menu/company_menu.php'; ?>
</div>
<div class="col-xs-10">
    <?php 
    switch ($_GET['event'])
    {
        case "addcompany":
            include '../contents/company_add.php';
            break;
        case "editcompany":
            include '../contents/company_edit.php';
            break;
        default : include '../contents/company_content.php';
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