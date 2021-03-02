<script>
function confirmDelete() {
	if (confirm("You confirm the removal?")) {
		return true;
	} else {
		return false;
	}
}

</script>
<div class="panel panel-default">
  <div class="panel-heading"><span class="glyphicon glyphicon-cog" style="padding-right: 5px;"></span>Category Listing</div>
  <div class="panel-body">
      
      <table class='table table-striped table table-bordered'>
      <tr>
      <td>Category name</td>
      <td align="center">Status</td>
      <td align="center">Action</td>
      </tr>
<?php
     $category=mysql_query("SELECT * FROM category");
     while($res_cat=mysql_fetch_array($category))
     {
     echo "<tr><td>".iconv('Windows-1251', 'UTF-8', $res_cat['category_name'])."</td><td align='center'>";
             if($res_cat['category_status']==0)
             {
                 ?>
      <button type="button" class="btn btn-success">Active</button>
      <?php
             }
 else {
     ?>
      <button type="button" class="btn btn-danger">Inactive</button>
      <?php
 }
                 echo "</td>"
             . "<td align='center'><a style='padding-right:10px;' href='modul.php?event=edit&id=".$res_cat['category_id']."'><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-edit' style='padding-right:5px;'></span>Edit</button><a/>"
             . "<a href='event.php?event=delete&id=".$res_cat['category_id']."' onclick='return confirmDelete();'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash' style='padding-right:5px;'></span>Delete</button></a></td></tr>";
     }
     ?>
     </table></div></div>