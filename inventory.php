<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Past Inventory"; ?>

<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
</head>

    <?php include("includes/bodyheader.php"); ?>

    <?php include("includes/navigation.php"); ?>
    <?php include("config.php");?>
    <?php $query= "SELECT * from inventory";
    $result = mysqli_query ($db,$query); 
    $query= "SELECT * from inventory_updatelog";
    $result2 = mysqli_query ($db,$query);
    ?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                     
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <h2 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                                    <div style="color:#ffc107">&nbsp; INVENTORY</div></span></h2>
                                </div>
                                
                                <div class="portlet-body">

                                    <div class="row">
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="btn-group" style="padding-top: 6px ;">
                                                <button type="button" class="btn btn-default" id="today">Today</button>
                                                <button type="button" class="btn btn-default" id="days">7 days</button>
                                                <button type="button" class="btn btn-default" id="month">30 days</button>
                                            </div>
                                            
                                            <div class="form-group">
                                                
                                                <!-- HIDDEN DATE -->
                                                <div class="col-md-4">
                                                    <div class="input-group input-large date-picker input-daterange hidden" data-date="10/11/2012" data-date-format="mm/dd/yyyy" >
                                                        <input type="text" class="form-control" name="from" id="min" value="01/01/2010">
                                                        <span class="input-group-addon"> to </span>
                                                        <input type="text" class="form-control" name="to" id="max" value="01/01/2020"> </div>
                                                    <!-- /input-group -->
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="btn" style="float: right; padding-right: 0;">
                                            <a class="btn btn-default" href="javascript:;" data-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-share"></i>
                                                <span class="hidden-xs"> Export inventory </span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-backdrop"></div>
                                                <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                    <li>
                                                        <a href="javascript:;" data-action="0" class="tool-action">
                                                            <i class="icon-printer"></i> Print</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="1" class="tool-action">
                                                            <i class="icon-check"></i> Copy</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="2" class="tool-action">
                                                            <i class="icon-doc"></i> PDF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="3" class="tool-action">
                                                            <i class="icon-paper-clip"></i> Excel</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="4" class="tool-action">
                                                            <i class="icon-cloud-upload"></i> CSV</a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="5" class="tool-action">
                                                            <i class="icon-refresh"></i> Reload</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   
                                     <table class="table table-striped table-bordered table-hover table-header-fixed dt-responsive" width="100%" id="sample_3">
                                        <thead><h4 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                                    <div style="color:#ffc107">&nbsp; Recently Added</div></span></h4>
                                            <tr class="">
                                                <th class="all"> TimeStamp </th>
                                                <th class="all"> Equipment </th>
                                                <th class="all"> Quantity</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="inventorybody">
                                            <?php
                                                if($result2){
                                                    while($row2=mysqli_fetch_assoc($result2))
                                                    {
                                                        echo '<tr><td>'.$row2["timestamp"].'</td><td>'.$row2["equipment_name"].'</td><td>'.$row2["Quantity"];
                                                    }
                                                }
                                            
                                            ?>
                                        </tbody>
                                    </table>

                                    <space>
                                    </space>









                                    <table class="table table-striped table-bordered table-hover table-header-fixed dt-responsive" width="100%" id="sample_3">
                                        <thead>
                                           <h4 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                                            <div style="color:#ffc107">&nbsp; Available</div></span></h4>
                                             <tr class="">
                                                <th class="all"> Inventory code </th>
                                                <th class="all"> Equipment </th>
                                                <th class="all"> Quantity</th>
                                                <th class="all"> Price</th>
                                                <th class="all"> Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="inventorybody">
                                            <?php
                                                if($result){
                                                    while($row=mysqli_fetch_assoc($result))
                                                    {
                                                        echo '<tr><td>'.$row["inven_id"].'</td><td>'.$row["inven_name"].'</td><td>'.$row["available"].'</td><td>'.$row["inven_cost"].'</td><td><a href="edit_inventory.php?id='.$row["inven_id"].'&n='.$row["inven_name"].'"><i class="fa fa-pencil"></i></a></td></tr>';
                                                    }
                                                }
                                            mysqli_close($db);
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Hidden field for initializing tables with diffreent IDs -->
                            <input type="hidden" name="no_of_inventory_items" class="par" value=0>
                            <!-- END EXAMPLE TABLE PORTLET-->
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <?php include("includes/footer.php"); ?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../dashboard/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../dashboard/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../dashboard/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- DATEPICKER-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../dashboard/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../dashboard/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../dashboard/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../dashboard/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../dashboard/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../dashboard/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../dashboard/assets/pages/scripts/daterangefilter.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>
</html>