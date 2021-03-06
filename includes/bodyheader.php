<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed page-container-bg-solid">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="../Gondia/assets/layouts/layout4/img/logo-gondia.png" alt="logo" class="logo-default" />
                </a>
                <div class="menu-toggler sidebar-toggler" >
                    <span></span>
                </div>
            </div>
            <?php
                include_once('includes/config.php');
                $query= "SELECT inven_name,inven_id from inventory where available<=5";
                $result = mysqli_query ($db,$query);
                $rowcount=mysqli_num_rows($result);
            ?>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN PAGE TOP -->
            <div class="page-top">

                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="nav navbar-brand pull-left">Gondia Hospital&reg;</div>
                <div class="top-menu">
                    <div class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="username username-hide-on-mobile"> Nick </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="../Gondia/assets/layouts/layout4/img/avatar9.jpg" /> </a>
                        <ul class="dropdown-menu dropdown-menu-default animated bounceInDown">
                                    <li>
                                        <a href="../ChangePassword.php">
                                            <i class="icon-user"></i> Change Password </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-power-off"></i> Logout </a>
                                    </li>
                                </ul>
                        </li>
                    </div>
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-dark dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-bell" style="color: black;"></i>
                                <?php 
                                if($rowcount!=0){
                                echo '<span class="badge badge-primary">'.$rowcount.' </span>';
                                }
                                else{}
                                ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated bounceInDown">
                                <li class="external">
                                    <h3><span class="bold"><?php echo $rowcount; ?> pending</span> notifications</h3>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283" >
                                        <?php
                                        if($rowcount!=0)
                                        {
                                        while($row=mysqli_fetch_assoc($result))
                                                    {
                                                        echo '<li><a href="edit_inventory.php?id='.$row["inven_id"].'&n='.$row["inven_name"].'"><span class="time">just now</span><span class="details"><span class="label label-sm label-icon label-success"><i class="fa fa-plus"></i></span> '.$row["inven_name"].' </span></a></li>';
                                                    }
                                        }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->


    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->