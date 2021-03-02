<?php
function get_category($id)
{
$get_res=mysql_query("SELECT * FROM visits WHERE visit_id=".$id);
$show_cat=mysql_fetch_array($get_res);
$category_name=$show_cat['visit_name'];
return $category_name;
}
?>
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
  <div class="panel-heading"><span class="glyphicon glyphicon-cog" style="padding-right: 5px;"></span>Visit's Listing</div>
  <div class="panel-body">
      
  <table class='table table-striped table table-bordered'>
      <tr>
            <td align="center">Visits Name</td>
            <td align="center">Employee Name</td>
            <td align="center">Company</td>
            <td align="center">Visits Date</td>
            <td align="center">Type</td>
            <td align="center">Details</td>
            <td align="center">Status</td>
            <td align="center">Action</td>
      </tr>
        <?php
            $visits=mysql_query("SELECT * FROM visits JOIN  companies ON companies.company_id = visits.company_id");
            while($res_visits=mysql_fetch_array($visits)) {
            echo "<tr><td align='center'>".iconv('Windows-1251', 'UTF-8', $res_visits['visits_name'])."</td>";
            echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_visits['employee_name'])."</td>";
            echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_visits['company_name'])."</td>";            
            echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_visits['visits_date'])."</td>";
            if($res_visits['type']==0){
                ?>
               <td align='center'>Call</td>
               <?php
               }
               else {
                   ?>
               <td align='center'>Meet</td>
               <?php
               }     
            echo "<td align='center'>".iconv('Windows-1251', 'UTF-8', $res_visits['details'])."</td>";
            if($res_visits['status']==0){
                 ?>
                <td align='center'><button type="button" class="btn btn-success">In progress</button></td>
                <?php
                }
            elseif ($res_visits['status']==1){
                    ?>
                <td align='center'><button type="button" class="btn btn-primary">Completed</button></td>
                <?php
                }
                else {
                    ?>
                <td align='center'><button type="button" class="btn btn-danger">Canceled</button></td>
                <?php
                }     
                echo "<td align='center'><a style='padding-right:10px;' href='visits.php?event=editvisits&id=".$res_visits['visit_id']."'><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-edit' style='padding-right:5px;'></span>Edit</button><a/>"
                        . "<a href='event.php?event=deletevisits&id=".$res_visits['visit_id']."' onclick='return confirmDelete();'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash' style='padding-right:5px;'></span>Delete</button></a></td></tr>";
                }
                ?>
        </table>
    </div>
</div>