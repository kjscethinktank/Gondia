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
    <?php $query= "SELECT P_id from patient";
    $result = mysqli_query ($db,$query);  ?>


<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
					
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
     
<div class="content">
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                <h4 style="text-align:center;"><span class=" font-yellow-lemon sbold">
				<div style="color:#ffc107">&nbsp; Diagnosis</div></span></h4>
                <div class="form-horizontal">
               <div class="form-group form-md-line-input" >
                                <label class="col-xs-1 col-sm-1 col-md-1 control-label" style="color:black; font-size: 12px"><b>Patient id:</b>
                                    <span class="required"></span>
                                </label>
                                <div class="col-xs-4 col-sm-4 col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input list="p_id" id="pid" class="form-control" onchange="disp();" placeholder="Enter ID">
                                        <div class="form-control-focus"> </div>
                                        <datalist id="p_id">
                                        <?php
                                          if($result){
                                           while($row=mysqli_fetch_assoc($result))
                                            {    
                                             echo "<option>".$row['P_id']."</option>";
                                           }
                                          }
                                        ?>
                                        </datalist>
                                    </div>
                                </div>
                                
                            </div>             <script>            
                        function disp() {
                        var select = document.getElementById("pid");
                        var opt = select.value;
                        document.getElementById("symptoms").value="";
                        document.getElementById("earlier_treat").value="";
                        document.getElementById("conc").value="";    
                        $.ajax({
                        type: 'POST',
                        url: 'show.php',
                        data: {pidd:opt},
                        cache: false,
                        success: function(d){     
                        var res=d.split(",");
                        var p1=document.getElementById("pns");
                        p1.value=res[0].trim();

                        document.getElementById("pa").value=res[1].trim();
                        document.getElementById("pg").value=res[2].trim();
                        document.getElementById("pd").value=res[3].trim();  
                        document.getElementById("info").classList.remove("display-hide");  
                        }
                    });
                    }
                    </script><br><br>
                    <div id="info">
                    <div class="row">
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-2 col-sm-2 col-md-1 control-label" style="color:black;"><b>Name:</b>
                                </label>
                                <div class="col-xs-4 col-sm-4 col-md-2">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pns" style="border:none;">
                                    </div>
                                </div>
                               
                            
                            
                                <label class="col-xs-2 col-sm-2 col-md-1 control-label" style="color:black;"><b>DOA:</b>
                                </label>
                                <div class="col-xs-4 col-sm-4 col-md-2">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pd" style="border:none;">
                                    </div>
                                </div>
                              
                                <label class="col-xs-2 col-sm-2 col-md-1 control-label" style="color:black;"><b>Age:</b>
                                </label>
                                <div class="col-xs-4 col-sm-4 col-md-2">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pa" style="border:none;">
                                    </div>
                                </div>
                                
                            
                            
                                <label class="col-xs-2 col-sm-2 col-md-1 control-label" style="color:black;"><b>Gender:</b>
                                </label>
                                <div class="col-xs-4 col-sm-4 col-md-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pg" style="border:none;">
                                </div>
                                </div>
                                
                            
                        </div></div>
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
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-stethoscope"></i>
                                        </span>
                                    <input type="textarea" class="form-control" placeholder="Symptoms" id="symptoms" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Symptoms Observed</span>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-ambulance"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="Earlier Treatments" id="earlier_treat" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Earlier Treatments if any</span>    
									</div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-medkit"></i>
                                        </span>
                                    <input type="textarea" class="form-control" placeholder="Conclusions made" id="conc" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Conclusions Made</span>    
									</div>
                                </div>
                                </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
							    <div class="col-xs-5 col-sm-5 col-md-5"></div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <input type="submit" class="btn btn-warning" onclick="up();" value="Update Info">
                                </div>
								<div class="col-xs-5 col-sm-5 col-md-5"></div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
	 <script>
        function up(){
            var opt=document.getElementById("pid").value;
            var s=document.getElementById("symptoms").value;
            var er=document.getElementById("earlier_treat").value;
            var c=document.getElementById("conc").value;
            if(s!="" && er!="" && c!="")
                {
                  $.ajax({
                        type: 'POST',
                        url: 'updateda.php',
                        data: {pidd:opt,sym:s,ear:er,conc:c},
                        cache: false,
                        success: function(d){ 
                            var suc=document.getElementById("suc");
                            suc.classList.remove("display-hide");
                        }
                  })
                }
            else{
                var f=document.getElementById("fail");
                f.classList.remove("display-hide");
            }
        }
    </script>
</div>

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