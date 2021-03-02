<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign" style="padding-right: 5px;"></span>Add Visit</h3>
  </div>
  <div class="panel-body">
      <form class="form-horizontal" method="post" action="../pages/event.php?event=addvisits">
  
  <div class="form-group">
    <label for="inputVisitsName" class="col-sm-2 control-label">Visit's Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputvisits" name="visit" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputVisitsName" class="col-sm-2 control-label">Employee Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputvisits" name="ename" required>
    </div>
  </div>

<div class="form-group">
    <label for="inputVisits" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-5">
        <select class="form-control" name="com_id" required>
        <option></option>
        <?php
            $companies=mysql_query("SELECT * FROM companies");
            while($res_com=mysql_fetch_array($companies))
            {
                echo "<option value=".$res_com['company_id'].">".iconv('Windows-1251', 'UTF-8', $res_com['company_name'])."</option>";
            }
          ?>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputDuration" class="col-sm-2 control-label">Date and Time</label>
    <div class="input-group" style="width: 300px;padding-left: 15px;">
    <input class="form-control"  type="datetime-local" id="datetime" name = "datetime" required>
    </div>
  </div>


<div class="form-group">
    <label for="inputVisits" class="col-sm-2 control-label">Visits Type</label>
    <div class="col-sm-5">
      <select class="form-control" id="inputtype" name = "type" required>
        <option value=""></option>
        <option value="0">Call</option>
        <option value="1">Meet</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputVisitsName" class="col-sm-2 control-label">Details</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputdetails" name="details">
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