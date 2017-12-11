<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Change Password"; ?>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
</head>

    <?php include("includes/bodyheader.php"); ?>

    <?php include("includes/navigation.php"); ?>

<body>   

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
					
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

<!-- BEGIN LOGO -->
        <div class="logo">
            <!-- <a href="#">
                <img src="C:/xampp/htdocs/fiestabites_admin/dashboard/assets/pages/img/fiestabites.png" alt="" style="display: block;margin-left: auto;margin-right: auto"/> </a><br><br> -->
        </div>
        <!-- END LOGO -->
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
			<h2 style="text-align:center;"><span class="caption-subject font-yellow-lemon sbold">
			<div style="color:#ffc107">&nbsp; CHANGE PASSWORD</div></span></h2>
			
			</div>
			<div class="portlet-body">
			<form class="login-form" action="#" method="post" name="myForm" onsubmit="return validate()">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter a new password. </span>
                </div>
				<br>
				<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email ID</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="username"/> </div>
                </div>
				</div>
				<div class="row">
				<div class="col-md-2"></div>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-8">
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                </div>
				</div>
				<div class="col-md-2"></div>
				</div>
				<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-check"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" /> </div>
                    </div>
                </div>
				</div>
				<div class="col-md-2"></div>
				</div><br>
				<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-2">
                    <button type="submit" class="btn pull-right" style="background-color:#ffc107; color:white;"> Save Changes </button>
                </div>
				</div>
				<div class="col-md-2"></div>
				</div><br>
            </form>
			</div>
		</div>
		</div>
		<div class="col-md-2"></div>
        
</div>

</div>
</body>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
		 <script src="assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

<script language= "Javascript">
function validate(){

var p = document.forms["myForm"]["password"].value;
if(p==""||p==null){
alert("Fill the password field");
return false;
}
var c = document.forms["myForm"]["rpassword"].value;
if(c==""||c==null){
alert("Fill the confirm password field");
return false;
}
if(p!=c){
alert("Passwords do not match");
return false;
}

}
</script>		
  <?php include("includes/footer.php"); ?>
	
</body>

</html>