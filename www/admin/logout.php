<?php
session_start();

if(!isset($_SESSION['admin']))
{
 header("Location: index.php");
}
else if(isset($_SESSION['admin'])!="")
{
 header("Location: pages/admin.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['admin']);
 header("Location: index.php"); 
}
?>