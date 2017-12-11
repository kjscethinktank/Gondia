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
                            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                                <li class="nav-item start ">
                                    <a href="Currentorders.php" class="nav-link nav-toggle">
                                        <i class="fa fa-cutlery" style="color:#ffc107"></i>
                                        <span class="title">Current Orders</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item start ">
                                            <a href="Currentorders.php#n" class="nav-link " onclick="loadtab('n')">
                                                <i class="fa fa-tasks"></i>
                                                <span class="title">New Order</span>
                                            </a>
                                        </li>
                                        <li class="nav-item start ">
                                            <a href="Currentorders.php#p" class="nav-link " onclick="loadtab('p')">
                                                <i class="fa fa-hourglass-start"></i>
                                                <span class="title">Processing</span>
                                                <span class="badge badge-danger">3</span>
                                            </a>
                                        </li>
                                        <li class="nav-item start ">
                                            <a href="Currentorders.php#r" class="nav-link " onclick="loadtab('r')">
                                                <i class="fa fa-tag"></i>
                                                <span class="title">Recent</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="pastorders.php" class="nav-link nav-toggle">
                                        <i class="fa fa-database" style="color:#ffc107"></i>
                                        <span class="title">Past Orders</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="Addorders.php" class="nav-link nav-toggle">
                                        <i class="fa fa-pencil-square-o" style="color:#ffc107"></i>
                                        <span class="title">Add orders</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="Addinventory.php" class="nav-link nav-toggle">
                                        <i class="fa fa-clipboard" style="color:#ffc107"></i>
                                        <span class="title">Inventory</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="Addinventory.php" class="nav-link">
                                                <i class="fa fa-folder-open"></i>
                                                <span class="title">Add Inventory</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="inventory.php" class="nav-link ">
                                                <i class="fa fa-table"></i>
                                                <span class="title">Past Inventory</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="menu.php" class="nav-link nav-toggle">
                                        <i class="fa fa-file" style="color:#ffc107"></i>
                                        <span class="title">Menu</span>
                                        <span class="arrow"></span>
                                    </a>

                                </li>
                                <li class="nav-item  ">
                                    <a href="Addmenu.php" class="nav-link nav-toggle">
                                        <i class="fa fa-exchange" style="color:#ffc107"></i>
                                        <span class="title">Change Menu</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="Addmenu.php" class="nav-link ">
                                                <i class="fa fa-plus"></i>
                                                <span class="title">Add</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="Editmenu.php" class="nav-link ">
                                                <i class="fa fa-pencil"></i>
                                                <span class="title">Edit</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="Deletemenu.php" class="nav-link ">
                                                <i class="fa fa-trash-o"></i>
                                                <span class="title">Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="area.php" class="nav-link nav-toggle">
                                        <i class="fa fa-globe" style="color:#ffc107"></i>
                                        <span class="title">Areas</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item start ">
                                            <a href="area.php#a" class="nav-link " onclick="loadtab('a')">
                                                <i class="fa fa-eye"></i>
                                                <span class="title">View areas</span>
                                            </a>
                                        </li>
                                        <li class="nav-item start ">
                                            <a href="area.php#aa" class="nav-link " onclick="loadtab('aa')">
                                                <i class="fa fa-arrows"></i>
                                                <span class="title">Add area</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="Changepassword.php" class="nav-link nav-toggle">
                                        <i class="icon-settings" style="color:#ffc107"></i>
                                        <span class="title">Change Password</span>
                                        <span class="arrow"></span>
                                    </a>

                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link nav-toggle">
                                        <i class="fa fa-sign-out" style="color:#ffc107"></i>
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