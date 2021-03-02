<?php
$edit_id=$_GET['id'];
$edit_res=mysql_query("SELECT * FROM visits WHERE visit_id=".$edit_id);
$show_res=mysql_fetch_array($edit_res);
$datetime = str_replace(" ","T", substr($show_res['visits_date'], 0, 16));
$type = $show_res['type'];
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class='glyphicon glyphicon-edit' style='padding-right:5px;'></span>Edit Visits</h3>
  </div>
  <div class="panel-body">
      <?php
      echo "<form class='form-horizontal' method='post' action='../pages/event.php?event=editvisits&id=";echo $show_res['visit_id']."'>";
      ?>
  <div class="form-group">
    <label for="inputVisitsName" class="col-sm-2 control-label">Visit's Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputvisitname" name="visit" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['visits_name']); ?>">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmployee" class="col-sm-2 control-label">Employee Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmpName" name="ename" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['employee_name']); ?>">
    </div>    
  </div>

  <div class="form-group">
    <label for="inputVisits" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-5">
        <select class="form-control" name="com_id" required>
        <?php
            $companies=mysql_query("
            SELECT * FROM `companies` WHERE company_id =".$show_res['company_id']." union all
            SELECT * FROM `companies` WHERE company_id <> ".$show_res['company_id']);
            while($res_com=mysql_fetch_array($companies))
            {
                echo "<option value=".$res_com['company_id'].">".iconv('Windows-1251', 'UTF-8', $res_com['company_name'])." </option>";
            }
          ?>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputDuration" class="col-sm-2 control-label">Date and Time</label>
    <div class="input-group" style="width: 300px;padding-left: 15px;">
    <input class="form-control" type="datetime-local" id="datetime" name = "datetime" value = "<? echo $datetime; ?>" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputVisits" class="col-sm-2 control-label">Visits Type</label>
    <div class="col-sm-5">

    <select class="form-control" id="inputtype" name = "type" required>
      <option value="0">Call</option>
      <option value="1">Meet</option>
    </select>
    </div>
  </div>
  <?php
   echo '<script type="text/javascript"> setSelectedIndex(document.getElementById("inputtype"),"0");</script>';
  ?>
  

<div class="form-group">
    <label for="inputVisitsName" class="col-sm-2 control-label">Details</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputdetails" name="details" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['details']); ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputVisits" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-5">
      <select class="form-control" id="inputtype" name = "status" required>
        <option value="0">In progress</option>
        <option value="1">Completed</option>
        <option value="2">Canceled</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="btn-add">Submit</button>
    </div>
  </div>
</form>
  </div>
</div>