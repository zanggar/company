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
  <div class="panel-heading"><span class="glyphicon glyphicon-cog" style="padding-right: 5px;"></span>Company Listing</div>
  <div class="panel-body">
      
      <table class='table table-striped table table-bordered'>
      <tr>
      <td align="center">Company name</td>
      <td align="center">Address</td>
      <td align="center">Phone</td>
      <td align="center">Email</td>
      <td align="center">Category</td>      
      <td align="center">Action</td>
      </tr>
<?php
     $company=mysql_query("SELECT * FROM companies INNER JOIN category ON companies.category_id = category.category_id");
     while($res_com=mysql_fetch_array($company))
     {
     echo "<tr><td align='center'>".iconv('Windows-1251', 'UTF-8', $res_com['company_name'])."</td>";
     echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_com['addres'])."</td>";
     echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_com['phone_number'])."</td>";
     echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_com['email'])."</td>";
     echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_com['category_name'])."</td>";
     echo "<td align='center'><a style='padding-right:10px;' href='company.php?event=editcompany&id=".$res_com['company_id']."'><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-edit' style='padding-right:5px;'></span>Edit</button><a/>"
             . "<a href='event.php?event=deletecompany&id=".$res_com['company_id']."' onclick='return confirmDelete();'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash' style='padding-right:5px;'></span>Delete</button></a></td></tr>";
     }
     ?>
     </table></div></div>