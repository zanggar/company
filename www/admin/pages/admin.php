<?php
session_start();

 header("Location: ../index.php");
?>
<html>
<head>
    <meta charset="UTF-8"/>
<title>Welcome</title>
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<script src="../js/jquery-1.12.1.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
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
        case "case1":
            break;
        default : echo "<p class='head_title'>Home page</p>";
    }
     ?>
          <hr>
      </div>
      <div class="col-xs-2" style="padding-left: 20px;">
     <?php include '../menu/home_menu.php'; ?>
</div>
<div class="col-xs-10">
    <?php 
    switch ($_GET['event'])
    {
        case "case":
            break;
          default : include 'contents/content.php';
    }
     ?>
</div>
  </div>
  <div class="row" id="footer">

  </div>
</div>
</body>
</html>