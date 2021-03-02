<?php
session_start();
include_once '../../db/dbconnect.php';
if(!isset($_SESSION['admin']))
{
 header("Location: ../../index.php");
}
else
{
        if($_GET['event']=="add" || $_GET['event']=="edit" || $_GET['event']=="delete"){
                $id=$_GET['id'];
                $cat_name=iconv('UTF-8', 'Windows-1251', $_POST['category']);
                if (isset($_POST['Active'])) {
                        $active=0;
                        }
                        else{
                        $active=1;
                        }
                        if($_GET['event']=="add"){
                                if(mysql_query("INSERT INTO category(category_name,category_status) VALUES('$cat_name','$active')")){
                                ?>
                                <script>window.location = "modul.php";</script>
                                <?php
                                }
                                else{
                                ?>
                                <script>alert('error while inserting...');</script>
                                <?php
                                }
                        }
                        if($_GET['event']=="edit"){
                                if(mysql_query("update category set category_name='".$cat_name."',category_status='".$active."' where category_id=".$id)){
                                        ?>
                                <script>window.location = "modul.php";</script>
                                <?php
                                }
                                else{
                                        ?>
                                <script>alert('error while inserting...');</script>
                                <?php
                                }
                        }
                }
                if($_GET['event']=="delete"){
                        if(mysql_query("delete from category where category_id=".$id)){
                                        ?>
                                <script>window.location = "modul.php";</script>
                                <?php
                                }
                                else{
                                        ?>
                                <script>alert('error while inserting...');</script>
                                <?php
                                }
                        }
        elseif($_GET['event']=="addcompany" || $_GET['event']=="editcompany" || $_GET['event']=="deletecompany"){
                $id=$_GET['id'];
                $category_id=iconv('UTF-8', 'Windows-1251', $_POST['var_id']);
                $company_name=iconv('UTF-8', 'Windows-1251', $_POST['company']);
                $addres=iconv('UTF-8', 'Windows-1251', $_POST['companyaddres']);
                $phone_number=iconv('UTF-8', 'Windows-1251', $_POST['companyphone']);
                $email=iconv('UTF-8', 'Windows-1251', $_POST['companyemail']);
                if($_GET['event']=="addcompany"){    
                        if(mysql_query("INSERT INTO companies(category_id,company_name,addres,phone_number,email) VALUES('$category_id','$company_name','$addres','$phone_number','$email')")){
                        ?>
                        <script>window.location = "company.php";</script>
                        <?php
                        }
                        else{
                                ?>
                        <script>alert('error while inserting...');</script>
                        <?php
                        }
                }
                if($_GET['event']=="editcompany"){
                        if(mysql_query("update companies set category_id='".$category_id."',company_name='".$company_name."',addres='".$addres."',phone_number='".$phone_number."',email='".$email."' where company_id=".$id)){
                ?>
                <script>window.location = "company.php";</script>
                        <?php
                        }
                        else{
                                ?>
                        <script>alert('error while inserting...');</script>
                        <?php
                        }
                }
                if($_GET['event']=="deletecompany"){
                        if(mysql_query("delete from companies where company_id=".$id)){
                                ?>
                        <script>window.location = "company.php";</script>
                        <?php
                        }
                        else{
                                ?>
                        <script>alert('error while inserting...');</script>
                        <?php
                        }
                }
        }
        elseif($_GET['event']=="addvisits" || $_GET['event']=="editvisits" || $_GET['event']=="deletevisits"){
                $id=$_GET['id'];
                $company_id=iconv('UTF-8', 'Windows-1251', $_POST['com_id']);
                $visits_name=iconv('UTF-8', 'Windows-1251', $_POST['visit']);
                $visits_date=iconv('UTF-8', 'Windows-1251', $_POST['datetime']);
                $status=iconv('UTF-8', 'Windows-1251', $_POST['status']);
                $type=iconv('UTF-8', 'Windows-1251', $_POST['type']);
                $details=iconv('UTF-8', 'Windows-1251', $_POST['details']);
                $employee_name=iconv('UTF-8', 'Windows-1251', $_POST['ename']);
                if($_GET['event']=="addvisits"){    
                        if(mysql_query("INSERT INTO visits(company_id,visits_name,visits_date,status,type,details,employee_name) 
                        VALUES('$company_id','$visits_name','$visits_date','$status','$type','$details','$employee_name')")){
                        ?>
                        <script>window.location = "visits.php";</script>
                        <?php
                        }
                        else{
                                ?>
                        <script>alert('error while inserting...');</script>
                        <?php
                        }
                }
                if($_GET['event']=="editvisits"){
                        if(mysql_query("update visits set company_id='".$company_id."',visits_name='".$visits_name."',visits_date='".$visits_date."',status='".$status."',type='".$type."',details='".$details."',employee_name='".$employee_name."' where visit_id=".$id)){
                ?>
                <script>window.location = "visits.php";</script>
                        <?php
                        }
                        else{
                                ?>
                        <script>alert('error while inserting...');</script>
                        <?php
                        }
                }
                if($_GET['event']=="deletevisits"){
                        if(mysql_query("delete from visits where visit_id=".$id)){
                                ?>
                        <script>window.location = "visits.php";</script>
                        <?php
                        }
                        else{
                                ?>
                        <script>alert('error while inserting...');</script>
                        <?php
                        }
                }
        }
        else{}
}                                                      
                               ?>