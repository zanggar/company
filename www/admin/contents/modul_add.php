<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign" style="padding-right: 5px;"></span>Add Category</h3>
  </div>
  <div class="panel-body">
      <form class="form-horizontal" method="post" action="../pages/event.php?event=add">
  <div class="form-group">
    <label for="inputCategoryName" class="col-sm-2 control-label">Category Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputcategory" name="category">
    </div>
  </div>
  <div class="form-group">
     <label for="inputStatus" class="col-sm-2 control-label">Status</label>    
      <div class="checkbox col-sm-10">
        <label>
            <input type="checkbox" name="Active"> Active
        </label>
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