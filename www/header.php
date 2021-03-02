<div class="container" style="padding-top: 30px;">
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <a class="navbar-brand " href="index.php"><span class="glyphicon glyphicon-home" style="padding-right: 5px;"></span>Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right" style="padding-right: 10px;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" style="padding-right: 5px;"></span>
              <?php 
              if($row['full_name']=="")
              {
                  echo "Guest<span class='caret'></span></a>"; 
              }   
              else
              {
                  echo $row['full_name'];
                  ?>
              <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../logout.php?logout"><span class='glyphicon glyphicon-log-out' style='padding-right: 3px;'></span>Logout</a></li>
          </ul>
              <?php
              }
               ?>
        </li>
      </ul>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>