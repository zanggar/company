<?php
$edit_id=$_GET['id'];
$edit_res=mysql_query("SELECT * FROM category WHERE category_id=".$edit_id);
$show_res=mysql_fetch_array($edit_res);
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class='glyphicon glyphicon-edit' style='padding-right:5px;'></span>Edit Category</h3>
  </div>
  <div class="panel-body">
      <?php
      echo "<form class='form-horizontal' method='post' action='../pages/event.php?event=edit&id=";echo $show_res['category_id']."'>";
      ?>
  <div class="form-group">
    <label for="inputCategoryName" class="col-sm-2 control-label">Category Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputcategory" name="category" value="<?php echo iconv('Windows-1251', 'UTF-8', $show_res['category_name']); ?>">
    </div>
  </div>
  <div class="form-group">
     <label for="inputStatus" class="col-sm-2 control-label">Status</label>    
      <div class="checkbox col-sm-10">
        <label>
            <?php if($show_res['category_status']==0)
            {?>
            <input type="checkbox" name="Active" checked> Active
            <?php
            }
            else
            {
                ?>
            <input type="checkbox" name="Active"> Active
            <?php
            }
            ?>
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