
<head>
              <?php
                session_start();
                error_reporting(0);
                if(!isset($_SESSION['loggedInUser']))
                {
                    header('Location:login.php');

                }

                ?>
</head>


            <body onload="showType()">
  
<!-- BEGIN CONTAINER -->
                <div class="page-container">

                    <!-- BEGIN SIDEBAR -->
                    <div class="page-sidebar-wrapper">
                        <!-- END SIDEBAR -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <div class="page-sidebar navbar-collapse collapse">

                            <!-- BEGIN SIDEBAR MENU -->
                            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                            <ul class="page-sidebar-menu page-sidebar-menu-closed page-header-fixed page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                                <li class="nav-item start" id="admit">
                                    <a href="Admitpatient.php" class="nav-link nav-toggle">
                                        <i class="fa fa-user" style="color:#0984e3"></i>
                                        <span class="title">Admit Patient</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                 <li class="nav-item " id="patients">
                                    <a  class="nav-link nav-toggle">
                                        <i class="fa fa-clipboard" style="color:#0984e3"></i>
                                        <span class="title">Patients</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="daignosis.php" class="nav-link">
                                                <i class="fa fa-folder-open"></i>
                                                <span class="title">Diagnosis</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="DoctorFindings.php" class="nav-link ">
                                                <i class="fa fa-table"></i>
                                                <span class="title">Doctor Findings</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="DailyReadings.php" class="nav-link">
                                                <i class="fa fa-folder-open"></i>
                                                <span class="title">Daily Readings</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  " id="inventory">
                                            <a href="patient_inventory.php" class="nav-link">
                                                <i class="fa fa-clipboard"></i>
                                                <span class="title">Add Inventory</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                               
                                <li class="nav-item  " id="billing">
                                    <a href="inventory.php" class="nav-link nav-toggle">
                                        <i class="fa fa-clipboard" style="color:#0984e3"></i>
                                        <span class="title">Inventory</span>
                                        <span class="arrow"></span>
                                    </a>
                                   
                                </li>
                                <li class="nav-item  " id="register">
                                    <a href="Billing_new.php" class="nav-link nav-toggle">
                                        <i class="fa fa-file" style="color:#0984e3"></i>
                                        <span class="title">Bills</span>
                                        <span class="arrow"></span>
                                    </a>

                                </li>
                                <li class="nav-item  ">
                                    <a href="signup.php" class="nav-link nav-toggle">
                                        <i class="fa fa-exchange" style="color:#0984e3"></i>
                                        <span class="title">Register</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link nav-toggle">
                                        <i class="fa fa-sign-out" style="color:#0984e3"></i>
                                        <span class="title">Sign-out</span>
                                        <span class="arrow"></span>
                                    </a>

                                </li>

                            </ul>
                            <!-- END SIDEBAR MENU -->
                        </div>
                        <!-- END SIDEBAR -->
                    </div>
                    <!-- END SIDEBAR -->
                     <script type="text/javascript">
                function showType()
                {
                    var user="<?php echo $_SESSION['loggedInType']; ?>";
                    var admit=document.getElementById("admit");
                    var patientss=document.getElementById("patients");
                    var inven=document.getElementById("inventory");
                    var bill=document.getElementById("billing");
                    var reg=document.getElementById("register");


                    if(user=="receptionist")
                    {

                        patients.style.display="none";
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
                        patient.style.display="none";
                        //$('#doc').remove();
                    }



                }


            </script>