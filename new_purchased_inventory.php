<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Diagnosis"; ?>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
</head>

    <?php include("includes/bodyheader.php"); ?>

    <?php include("includes/navigation.php"); ?>
    <?php include("config.php");?>
    <?php
         $id=$_GET["id"];
         $name=$_GET["n"];                         
    ?>


<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
					
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
     
<div class="content">
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                <h2 style="text-align:center;"><span class=" font-yellow-lemon sbold">
				<div style="color:#ffc107">&nbsp; Diagnosis</div></span></h2>
                <div class="form-horizontal">
                <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" style="color:black;"><b>Inventory id:</b>
                                    <span class="required"></span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        
                                        <input type="text"  id="pid" class="form-control" readonly="TRUE" style="border:none;" value="<?php echo $id; ?>">
                                        <div class="form-control-focus"> </div>
                                        
									</div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                           
                    <div class="row">
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" style="color:black;"><b>Inventory Name:</b>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pns" value="<?php echo $name; ?> " style="border:none;">
                                    </div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                        </div>
                       
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    
                    <form action="#" class="form-horizontal" id="form">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide" id="fail">
                                <button class="close" data-close="alert"></button> Your form has some errors. Please check below. </div>
                            <div class="alert alert-success display-hide" id="suc">
                                <button class="close" data-close="alert"></button> Information is Updated Successfully! </div>
                            
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Quantity</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        
                                    <input type="text" class="form-control" placeholder="" name="quant" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">enter the quantity</span>    
									</div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Price </b>
                                    
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-medkit"></i>
                                        </span>
                                    <input type="textarea" class="form-control" placeholder="" name="price" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Price of a piece</span>    
									</div>
                                </div>
                                </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
							    <div class="col-xs-3 col-sm-3 col-md-3"></div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <input type="submit" class="btn btn-warning" name="sub" value="Update Info">
                                </div>
								<div class="col-xs-6 col-sm-6 col-md-6"></div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
	 </div>
     <?php 

        if(isset($_POST["sub"])){
        $quant=$_POST["quant"];
        $price=$_POST["price"];
            $query="Select available from inventory where inven_id= '$id'";
            $res=mysqli_query($db,$query);
            if($res){
                $add=$row["available"];
                $add= $add + $quant;
                if($price != "" ){
                    $query1="Update inventory set available = '$add' , price= '$price' where inven_id='$id'";
                    $res1=mysqli_query($db,$query1); 
                    if($res1){
                     header('Location: inventory.php');
                    }
                 }
            else{
                $query2="Update inventory set available = '$add' where inven_id='$id'";
                $res2=mysqli_query($db,$query2);
                if($res1){
                   header('Location: inventory.php');
                   }
                }
            }
        }
     ?>

</div>    

<?php include("includes/footer.php"); ?>

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