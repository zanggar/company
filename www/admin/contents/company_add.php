<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign" style="padding-right: 5px;"></span>Add Company</h3>
  </div>
  <div class="panel-body">
      <form class="form-horizontal" method="post" action="../pages/event.php?event=addcompany">
  <div class="form-group">
    <label for="inputCompanyName" class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputcompany" name="company">
    </div>
  </div>

  <div class="form-group">
    <label for="inputCompanyAddres" class="col-sm-2 control-label">Company' Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputcompanyaddress" name="companyaddres" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputCompanyPhone" class="col-sm-2 control-label">Phone Number</label>
    <div class="col-sm-5">
      <input type="tel" class="form-control" id="inputcompanyphone" name="companyphone" placeholder = "999-999-9999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
       required>       
    </div>
  </div>

  <div class="form-group">
    <label for="inputCompanyEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputcompanyEmail" name="companyemail"
      required>       
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-5">
        <select class='form-control' name="var_id">
            <?php
            $category=mysql_query("SELECT * FROM category where category_status=0");
          while($res_category=mysql_fetch_array($category))
          {
              echo "<option value='".$res_category['category_id']."'>".iconv('Windows-1251', 'UTF-8', $res_category['category_name'])."</option>";
          }
            ?>
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