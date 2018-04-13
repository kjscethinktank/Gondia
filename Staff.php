<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Staff"; ?>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
</head>
<body>
    <?php include("includes/bodyheader.php"); ?>

    <?php include("includes/navigation.php"); ?>
    <?php $query= "SELECT * from staff";
    $result = mysqli_query ($db,$query); 
     ?>


    <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
                    
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
     
<div class="content">
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                <h2 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                <div style="color:#ffc107">&nbsp; Staff </div></span></h2>

                <table class="table table-striped table-bordered table-hover table-header-fixed dt-responsive" width="100%" id="sample_3">
                                        <thead>
                                            <tr class="">
                                                <th class="all"> S_id</th>
                                                <th class="all"> Name</th>
                                                <th class="all"> Address</th>
                                                <th class="all"> Age</th>
                                                <th class="all"> Gender</th>
                                                <th class="all"> Shift</th>
                                                <th class="all"> Salary</th>
                                                <th class="all"> Balance</th>
                                            </tr>
                                        </thead>
                                         <tbody id="sample_4">
                                        <?php
                                           if($result)
                                           {
                                               while($row=mysqli_fetch_assoc($result))
                                                {    
                                                  echo 
                                                  "<tr class=''>
                                                   <td>".$row['S_id']."</td>".
                                                  "<td>".$row['Name']."</td>".
                                                  "<td>".$row['Address']."</td>".
                                                  "<td>".$row['Age']."</td>".
                                                  "<td>".$row['Gender']."</td>".
                                                  "<td>".$row['Shift']."</td>".
                                                  "<td>".$row['Salary']."</td>".
                                                  "<td>".$row['Balance']."</td> </tr>";
                                                }
                                            }

                                        ?>
                                         </tbody>

                </table>



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

