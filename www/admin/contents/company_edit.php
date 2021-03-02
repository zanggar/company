<?php
$edit_id=$_GET['id'];
$edit_res=mysql_query("SELECT * FROM companies WHERE company_id=".$edit_id);
$show_res=mysql_fetch_array($edit_res);
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class='glyphicon glyphicon-edit' style='padding-right:5px;'></span>Edit Company</h3>
  </div>
  <div class="panel-body">
      <?php
      echo "<form class='form-horizontal' method='post' action='../pages/event.php?event=editcompany&id=";echo $show_res['company_id']."'>";
      ?>
<div class="form-group">
    <label for="inputCompanyName" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputcompany" name="company" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['company_name']); ?>" required>
  </div>
</div>

<div class="form-group">
    <label for="inputCompanyAddres" class="col-sm-2 control-label">Company' Address</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputcompanyaddress" name="companyaddres" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['addres']); ?>" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputCompanyPhone" class="col-sm-2 control-label">Phone Number</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" id="inputcompanyphone" name="companyphone" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['phone_number']); ?>" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputCompanyEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" id="inputcompanyEmail" name="companyemail" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['email']); ?>" required>
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