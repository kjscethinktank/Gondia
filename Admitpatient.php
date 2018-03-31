<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Admit Patient"; ?>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
</head>

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
				<div style="color:#81ecec">&nbsp; ADMIT PATIENT</div></span></h2>
                   
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form action="#" class="form-horizontal" id="form">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide" id="fail">
                                <button class="close" data-close="alert"></button> Your form has some errors. Please check below. </div>
                            <div class="alert alert-success display-hide" id="suc">
                                <button class="close" data-close="alert"></button> Information is updated successfully! </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Patient ID</b>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
								<div class="input-group">
                                    <input type="text" class="form-control" placeholder="" id="pid" readonly style="border:none;">
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"><button class="btn btn-success" onclick="gene();">Generate</button></div>
                            </div>
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Patient Name</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" id="pn">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Patient Name</span>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Patient Type</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-male"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" id="pt" required>
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Patient Age</b>
								<span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-birthday-cake"></i>
                                        </span>
                                    <input type="number" class="form-control" placeholder="" id="pa" min="0" max="150" required>
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Gender</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
								<div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-venus-mars"></i>
                                        </span>
                                    <select class="form-control" required id="pg">
                                    <option disabled selected>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>    
                                    </select>
                                    <!--div class="form-control-focus"> </div-->
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Consultant Dr</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user-plus"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" id="pc" required>
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							 <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Ref. By</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" id="pr">
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Date of Admission</b>
								<span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    <input type="date" class="form-control" placeholder="" id="doa" required>
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Time of Admission</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
								<div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    <input type="time" class="form-control" placeholder="" id="toa" required>
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Ward No.</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
								<div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" id="wn">
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
                        <div class="form-actions">
                            <div class="row">
							    <div class="col-xs-5 col-sm-5 col-md-5"></div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <button type="submit" class="btn btn-warning" style="color:white;" onclick="up();">Update</button>
                                </div>
								<div class="col-xs-6 col-sm-6 col-md-6"></div>
                            </div>
                        </div>
                        </div>
                    </form>
                    <script>
                        function gene(){
                            var ID = Math.random().toString(36).substr(2, 9);
                            document.getElementById("pid").value=ID;
                        }
                        function up(){
                            var pi=document.getElementById("pid").value;
                            var pn=document.getElementById("pn").value;
                            var pt=document.getElementById("pt").value;
                            var pc=document.getElementById("pc").value;
                            var pr=document.getElementById("pr").value;
                            var d=document.getElementById("doa").value;
                            var t=document.getElementById("toa").value;
                            var w=document.getElementById("wn").value;
                            var a=document.getElementById("pa").value;
                            var sel=document.getElementById("pg");
                            var pg=sel.options[sel.selectedIndex].text;
                            if(pn!="" && pt!="" && pc!="" && d!="" && t!="" && a!="" && sel!="" && pi!="")
                            {
                            $.ajax({
                            type: 'POST',
                            url: 'updatedap.php',
                            data: {pan:pn,pat:pt,pac:pc,par:pr,doa:d,toa:t,wn:w,pa:a,pag:pg,pid:pi},
                            cache: false,
                            success: function(d){
                            var suc=document.getElementById("suc");
                            suc.classList.remove("display-hide");
                        }
                  });
                }
            else{
                var f=document.getElementById("fail");
                f.classList.remove("display-hide");
            }
        }
                        
                    </script>    
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
	 
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