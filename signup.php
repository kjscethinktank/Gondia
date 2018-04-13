<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Sign Up"; ?>
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
            <div style="color:#81ecec">&nbsp; SIGN UP</div></span></h2>
            
            </div>
            <div class="portlet-body">
            <form class="login-form" action="#" method="post" name="myForm" onsubmit="return validate()">
                <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <!--<label for="email">Email</label>-->
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" id="user"
                               placeholder="Username">
                    </div>
                </div>
                <div class="col-md-2"></div>
                </div>
                <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <!--<label for="email">Email</label>-->
                    <label class="sr-only" for="inlineFormInputGroup">Email</label>
                    <div class="input-group mb-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-2"></div>
                </div>
                <div class="row">
                <div class="col-md-2"></div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <!--<label for="password">Password</label>-->
                            <label class="sr-only" for="passwd">Password</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon"><i class="fa fa-unlock-alt"
                                                                  aria-hidden="true"></i>
                                </div>
                                <input type="password" class="form-control" id="password"
                                       placeholder="Password"></div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <!--<label for="password">Password</label>-->
                            <label class="sr-only" for="inlineFormInputGroup">Confirm-Password</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon"><i class="fa fa-unlock-alt"
                                                                  aria-hidden="true"></i>
                                </div>
                                <input type="password" class="form-control" id="cpassword"
                                       placeholder="Confirm Password"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                </div>
                <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <!--<label for="password">Password</label>-->
                    <label class="sr-only" for="inputCity">Contact Number</label>
                    <div class="input-group mb-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" id="con" placeholder="Contact Number">
                    </div>
                </div>
                </div>
                
                <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group col-md-8">
                    <select class="form-control" id="type">
                        <option selected>Select User type</option>
                        <option>Accountant</option>
                        <option>Admin</option>
                        <option>Receptionist</option>
                        <option>Doctor/nurse</option>
                 
                    </select>
                </div>
                <div class="col-md-2"></div>
                </div>
                <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn pull-right" style="background-color:#ffc107; color:white;" onclick="add()"> Register </button>
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

<?php include("includes/footer.php"); ?>
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

    
</body>

</html>