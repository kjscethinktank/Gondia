

<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['loggedInUser']))
{
    header("Location:login.php");

}
require_once('config.php');


?>



<!DOCTYPE html>
<html lang="en">
<?php $page_title = "Diagnosis"; ?>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
</head>
	
    <?php include("includes/bodyheader.php"); ?>
  
                    
<!-- BEGIN CONTENT BODY -->
<body onload="showType()">
<div class="page-content-wrapper" style="margin-top: 50px">
	<div class="page-content">


  
            
                <div class="portlet-title">
                <h4 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                <div style="color:#ffc107">&nbsp; Modules</div></span></h4>
                <div class="portlet light portlet-form">
     
                	<div class="mt-element-card mt-element-overlay">
                                        <div class="row">
                                        	
                                            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" id="admit">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <i class="fa fa-stethoscope" style="padding-top:80px;height:162px;font-size:48px"></i>
                                                        <div class="mt-overlay">
                                                            <ul class="hover-list-modules" style="list-style-type: none; padding-top: 10px; padding-left: 8px;" >
                                                                <li ><a style="text-decoration: none;" href="Admitpatient.php">
                                                                        <p style="color: #fff;">Admit Patient</p>
                                                                    </a></li>
                                                                </ul>
                                                          </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Admit Patient</h3>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" id="diagnosis">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <i class="fa fa-heartbeat" style="padding-top:80px;height:162px;font-size:48px"></i>
                                                        <div class="mt-overlay">
                                                        	<ul class="hover-list-modules" style="list-style-type: none; padding-top: 10px; padding-left: 8px;" >
                                                        		<li ><a style="text-decoration: none;" href="daignosis.php">
                                                                        <p style="color: #fff;">Diagnosis</p>
                                                                    </a></li>
                                                        		<li>
                                                        			<a  style="text-decoration: none;" href="DailyReadings.php">
                                                                        <p style="color: #fff;">Daily Readings</p>
                                                                    </a>
                                                        		</li>
                                                        		<li>
                                                        			<a   style="text-decoration: none;" href="DoctorFindings.php">
                                                                        <p style="color: #fff;">Doctor Findings</p>
                                                                    </a>
                                                        		</li>
                                                        	</ul>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Patient</h3>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" id="inventory">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <i class="fa fa-stethoscope" style="padding-top:80px;height:162px;font-size:48px"></i>
                                                        <div class="mt-overlay">
                                                            <ul class="hover-list-modules" style="list-style-type: none; padding-top: 10px; padding-left: 8px;" >
                                                                <li ><a style="text-decoration: none;" href="inventory.php">
                                                                        <p style="color: #fff;">Inventory</p>
                                                                    </a></li>
                                                                </ul>
                                                          </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Inventory</h3>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" id="billing">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <i class="fa fa-clipboard" style="padding-top:80px;height:162px;font-size:48px"></i>
                                                        <div class="mt-overlay">
                                                            <ul class="hover-list-modules" style="list-style-type: none; padding-top: 10px; padding-left: 8px;" >
                                                                <li ><a style="text-decoration: none;" href="Billing_new.php" >
                                                                        <p style="color: #fff;">Billing</p>
                                                                    </a></li>
                                                                </ul>
                                                          </div> </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Bills</h3>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" id="register">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <i class="fa fa-stethoscope" style="padding-top:80px;height:162px;font-size:48px"></i>
                                                        <div class="mt-overlay">
                                                            <ul class="hover-list-modules" style="list-style-type: none; padding-top: 10px; padding-left: 8px;" >
                                                                <li ><a style="text-decoration: none;" href="signup.php">
                                                                        <p style="color: #fff;">Sign Up</p>
                                                                    </a></li>
                                                                </ul>
                                                          </div></div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Register</h3>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" id="staff">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <i class="fa fa-clipboard" style="padding-top:80px;height:162px;font-size:48px"></i>
                                                        <div class="mt-overlay">
                                                            <ul class="hover-list-modules" style="list-style-type: none; padding-top: 10px; padding-left: 8px;" >
                                                                <li ><a style="text-decoration: none;" href="Staff.php" >
                                                                        <p style="color: #fff;">Staff</p>
                                                                    </a></li>
                                                                </ul>
                                                          </div> </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Staff</h3>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                       
                                        </div>






</div>  
</div>

  



  
    <div class="row">
    	<div class="col-xs-4 col-md-4 col-sm-4">
    		<div class="dashboard-stat2 bordered" >
    			<h4 style="font-color:#fff">50 patients remaining</h4>
    		</div>
    		
    	</div>
    	<div class="col-xs-4 col-md-4 col-sm-4">
            <div class="dashboard-stat2 bordered" >
                <h4 style="font-color:#fff">one more template same size</h4>
            </div>
            
        </div>
        <div class="col-xs-4 col-md-4 col-sm-4">
            <div class="dashboard-stat2 bordered" >
                <h4 style="font-color:#fff">Available Doctors</h4>
            </div>
            
        </div>

    	
    	</div>


</body>
</html>
<script type="text/javascript">
    function showType()
    {
        var user="<?php echo $_SESSION['loggedInType']; ?>";
        var admit=document.getElementById("admit");
        var diag=document.getElementById("diagnosis");
        var inven=document.getElementById("inventory");
        var bill=document.getElementById("billing");
        var reg=document.getElementById("register");


        if(user=="receptionist")
        {

            diag.style.display="none";
            reg.style.display="none";


            //$('#doc').remove();
        }

        if(user=="doctor")
        {
            admit.style.display="none";
            bill.style.display="none";
            reg.style.display="none";
            inven.style.display="none";

            //$('#recept').remove();
        }

        if(user=="accountant")
        {
            admit.style.display="none";
            reg.style.display="none";
            diag.style.display="none";
            //$('#doc').remove();
        }




    }


</script>

<?php include("includes/footer.php"); ?>
