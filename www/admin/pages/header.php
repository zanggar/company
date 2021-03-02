<div class="container" style="padding-top: 30px;">
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand " href="visits.php"><span class="glyphicon glyphicon-home" style="padding-right: 5px;"></span>Home</a>
    </div>
      <ul class="nav navbar-nav navbar-right" style="padding-right: 10px;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" style="padding-right: 5px;"></span><?php echo $userRow['login']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../logout.php?logout"><span class='glyphicon glyphicon-log-out' style='padding-right: 3px;'></span>Logout</a></li>
          </ul>
        </li>
      </ul>
  </div>
</nav>
    </div>