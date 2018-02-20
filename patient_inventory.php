<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Patient Charges"; ?>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">    
</head>

    <?php include("includes/bodyheader.php"); ?>

    <?php include("includes/navigation.php"); ?>
    <?php include("config.php");?>
    <?php $query= "SELECT P_id from patient";
    $result = mysqli_query ($db,$query);
    $queryy= "SELECT inven_name from inventory";
    $resultt = mysqli_query ($db,$queryy);?>


<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
                    
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
     
<div class="content">
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                <h2 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                <div style="color:#ffc107">&nbsp; Patient Inventory</div></span></h2>
                <div class="form-horizontal">
                <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" style="color:black;"><b>Patient id:</b>
                                    <span class="required"></span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
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
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                            <script>            
                        function disp() {    
                        var select = document.getElementById("pid");
                        var opt = select.value;      
                        $.ajax({
                        type: 'POST',
                        url: 'show.php',
                        data: {pidd:opt},
                        cache: false,
                        success: function(d){     
                        var res=d.split(",");
                        var p1=document.getElementById("pns");
                        p1.value=res[0];
                        document.getElementById("pa").value=res[1].trim();
                        document.getElementById("pg").value=res[2].trim();
                        document.getElementById("pd").value=res[3].trim();
                        document.getElementById("info").classList.remove("display-hide");     
                        }
                    });
                         $.ajax({
                        type: 'POST',
                        url: 'showpin.php',
                        data: {pidd:opt},
                        cache: false,
                        success: function(d){
                        var ret=d.lastIndexOf("next");
                        var ren=d.substring(0,ret);
                        var res=ren.split("next");
                        var row="";
                        for(count=0;count<res.length;count++){
                            var respli= res[count].split(",");
                            row+='<tr><td>' + respli[0] + '</td><td>' + respli[1] +'</td><td>' + respli[2] +'</td></tr>';

                        }
                        $(row).appendTo("#sample_3 tbody");
                         
                        }
                    });
                    }
                    </script><br><br>
                    <div class="display-hide" id="info">
                    <div class="row">
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" style="color:black;"><b>Patient Name:</b>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pns" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" style="color:black;"><b>DOA:</b>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pd" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" style="color:black;"><b>Patient Age:</b>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pa" style="border:none;">
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div></div>
                            <div class="row">
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" style="color:black;"><b>Patient Gender:</b>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pg" style="border:none;">
                                </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                        </div>
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
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Charge for</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-inr"></i>
                                        </span>
                                    <input list="inventory" class="form-control" placeholder="" id="invent" required>
                                    <div class="form-control-focus"> </div>
                                    <datalist id="inventory">
                                        <?php
                                          if($resultt){
                                           while($row=mysqli_fetch_assoc($resultt))
                                            {    
                                             echo "<option>".$row['inven_name']."</option>";
                                           }
                                          }
                                        ?>
                                        </datalist>    
                                    <span class="help-block">Select Charge</span>
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Quantity</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-sort-numeric-asc"></i>
                                        </span>
                                    <input type="number" class="form-control" placeholder="" id="qaun" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Enter quantity</span>    
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-2 col-md-3"></div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-xs-5 col-sm-5 col-md-5"></div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <input type="submit" class="btn btn-warning" onclick="up();" value="Update Info">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>
                            </div>
                        </div>
                    </form>

                     <table class="table table-striped table-bordered table-hover table-header-fixed dt-responsive" width="100%" id="sample_3">
                                        <thead>
                                            <tr class="">
                                                <th class="all"> Date-Time</th>
                                                <th class="all"> Inventory ID</th>
                                                <th class="all"> Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody id="sample_4"></tbody>
                                    </table>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
     <script>
        function up(){
            var pi=document.getElementById("pid").value;
            var select1 = document.getElementById("invent");
            var opt1 = select1.value;
            var q=document.getElementById("qaun").value;
            if(q!="" && opt1!="")
                {
                  $.ajax({
                        type: 'POST',
                        url: 'updatepin.php',
                        data: {pidd:pi,nam:opt1,qaun:q},
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