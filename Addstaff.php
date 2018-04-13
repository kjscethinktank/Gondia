<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Add Staff"; ?>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
</head>
<body>
    <?php include("includes/bodyheader.php"); ?>
    <?php include("includes/navigation.php"); ?>
    


    <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
                    
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
     
<div class="content">
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                <h2 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                <div style="color:#ffc107">&nbsp; Add Staff </div></span></h2>

                <!-- BEGIN FORM-->
                    
                    <form action="" method="post" class="form-horizontal" id="form">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide" id="fail">
                                <button class="close" data-close="alert"></button> Your form has some errors. Please check below. </div>
                            <div class="alert alert-success display-hide" id="suc">
                                <button class="close" data-close="alert"></button> Information is Updated Successfully! </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>ID</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="identity" id="ide" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter ID</span>
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Name</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="name" id="name" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter name</span>
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Address</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-address-book"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="address" id="address" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter address</span>    
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Age</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           
                                        </span>
                                    <input type="textarea" class="form-control" placeholder="" name="age" id="age" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter age</span>    
                                    </div>
                                </div>
                                </div>
                             <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Gender</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="gender" id="gender" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter gender</span>    
                                    </div>
                                </div>
                              </div>
                                <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Shift</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">

                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="shift" id="shift" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter shift</span>    
                                    </div>
                                </div>
                                </div>
                                <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Salary</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="salary" id="salary" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter salary</span>    
                                    </div>
                                </div>
                                </div>
                                 <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Balance</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="balance" id="balance" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter balance</span>    
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-xs-5 col-sm-5 col-md-5"></div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <input type="submit" name="submit" class="btn btn-warning" value="Update Info">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>
                            </div>
                        </div>
                    </form>
                    <?php
                          if(isset($_POST['submit']))
                          {
                            
                            $id=$_POST['identity'];
                            $name=$_POST['name'];
                            $address=$_POST['address'];
                            $age=$_POST['age'];
                            $gender=$_POST['gender'];
                            $shift=$_POST['shift'];
                            $salary=$_POST['salary'];
                            $balance=$_POST['balance'];

                            


                        $query= "Insert into staff(S_id,Name,Address,Age,Gender,Shift,Salary,Balance) values('$id','$name','$address','$age','$gender',     
                            '$shift','$salary','$balance')";
                            $result = mysqli_query($db,$query); 
                            if($result)
                            {
                                echo  "Staff Added Successfully";
                            }
                            else
                            {
                                echo "Change Required";
                            }
                        }

                    ?>
                    

                

    <?php include("includes/footer.php");?>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
         <script src="assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js" type="text/javascript"></script>
         <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-selectsplitter/bootstrap-selectsplitter.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS --> 
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/components-bootstrap-select-splitter.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    
</body>

</html>

