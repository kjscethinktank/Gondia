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
				<div style="color:#ffc107">&nbsp; ADMIT PATIENT</div></span></h2>
                   
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form action="#" class="form-horizontal" id="form_sample_1">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> Your bill generation has some errors. Please check below. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> Your bill is generated! </div>
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Patient Name</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="name">
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
                                    <input type="text" class="form-control" placeholder="" name="flatno" required>
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-2 col-md-3"></div>
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
                                    <input type="text" class="form-control" placeholder="" name="street" required>
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
                                    <input type="text" class="form-control" placeholder="" name="area" required>
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
                                    <input type="date" class="form-control" placeholder="" name="landmark">
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
                                    <input type="text" class="form-control" placeholder="" name="number">
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Date of Discharge</b>
								<span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar-check-o"></i>
                                        </span>
                                    <input type="date" class="form-control" placeholder="" name="landmark">
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Time of Discharge</b>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
								<div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="" name="number">
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
                                    <input type="text" class="form-control" placeholder="" name="wardno">
                                    <div class="form-control-focus"> </div>
									</div>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							<div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Treatments:</b></label>
								<div class="col-xs-9 col-sm-9 col-md-9"></div>
							</div>
							<div  id="category_1">
							<div class="row">
							<div class="col-md-9">
							<select id="select_selectsplitter1" name="order_item1" class="form-control" size="4">
                                    <optgroup label="Additional Medicines">
                                        <option value="item_1_1">Paracetamol</option>
                                        <option value="item_1_2">Sumo Cold</option>
                                    </optgroup>
                                    <optgroup label="X Ray">
                                        <option value="item_2_1">X Ray 1</option>
                                        <option value="item_2_2">X Ray 2</option>
                                        <option value="item_2_3">X Ray 3</option>
                                        <option value="item_2_4">X Ray 4</option>
                                    </optgroup>
                                    <optgroup label="Ventilator">
									    <option value="item_3_1">Ventilator 1</option>
                                        <option value="item_3_2">Ventilator 2</option>
                                        <option value="item_3_3">Ventilator 3</option>
                                        <option value="item_3_4">Ventilator 4</option>
                                    </optgroup>
									<optgroup label="ECG">
                                        <option value="item_4_1">ECG 1</option>
                                        <option value="item_4_4">ECG 2</option>
                                        <option value="item_4_3">ECG 3</option>
                                    </optgroup>
									<optgroup label="Airbed">
                                        <option value="item_5_1">Airbed 1</option>
                                        <option value="item_5_2">Airbed 2</option>
                                        <option value="item_5_3">Airbed 3</option>
                                    </optgroup>
									<optgroup label="Echo">
                                        <option value="item_6_1">Echo 1</option>
                                        <option value="item_6_2">Echo 2</option>
                                        <option value="item_6_3">Echo 3</option>
                                    </optgroup>
									<optgroup label="CPR">
                                        <option value="item_7_1">CPR 1</option>
                                        <option value="item_7_2">CPR 2</option>
                                        <option value="item_7_3">CPR 3</option>
										<option value="item_7_4">CPR 4</option>
										<option value="item_7_5">CPR 5</option>
                                    </optgroup>
									<optgroup label="MLC">
                                        <option value="item_8_1">MLC 1</option>
                                        <option value="item_8_2">MLC 2</option>
                                        <option value="item_8_3">MLC 3</option>
										<option value="item_8_4">MLC 4</option>
										<option value="item_8_5">MLC 5</option>
										<option value="item_8_6">MLC 6</option>
                                    </optgroup>
									<optgroup label="Other Charges">
                                        <option value="item_9_1">GST</option>
                                        <option value="item_9_2">Rent</option>
                                        <option value="item_9_3">Treatment</option>
										<option value="item_9_4">Maintainance</option>
										
                                    </optgroup>
									
                                </select>
							   </div>
							   <br>
							   <div class="col-md-3">
							<label class="control-label" for="form_control_1" style="color:black;"><b>Quantity(1 to 50) : </b></label>
							<input type="number" name="quantity1" min="1" max="50">
							</div>
							</div>
							</div> 
							<br><div id="newr"></div>
							<br><a href="#">
                            <button type="button" class="btn btn-sm yellow-crusta btn-outline" id="button1">Add Item</button><a>
							<a href="#">
							<button type="button" class="btn btn-sm yellow-crusta btn-outline remove" style="float:right;" id="button2">Remove Item</button></a>
							<br><br><div class="form-group form-md-line-input">
                                <label class="col-xs-4 col-sm-4 col-md-4 control-label" for="form_control_1" style="color:black;"><b>Mode of Payment </b></label>
                                <div class="col-xs-12 col-sm-6 col-md-5">
                                    <select class="form-control">
                                        <option>Cash/Cheque</option>
                                        <option>Debit/Credit card</option>
                                    </select>
                                </div>
								<div class="col-xs-8 col-sm-3 col-md-3"></div>
                            </div>
							<input type="hidden" name="no_of_order_items" class="par" value=1>
                        </div>
                        <div class="form-actions">
                            <div class="row">
							    <div class="col-xs-5 col-sm-5 col-md-5"></div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <button type="submit" class="btn" style="background-color:#ffc107;color:white;">Calculate Bill</button>
                                </div>
								<div class="col-xs-6 col-sm-6 col-md-6"></div>
                            </div>
                        </div>
                    </form>
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
<script>

$(document).ready(function(){


    $("button[id=button1]").click(function(){
        
		var category = '<div  id="category_1"><div class="row"><div class="col-md-9"><select id="select_selectsplitter1" name="order_item1" class="form-control" size="4"><optgroup label="Additional Medicines"><option value="item_1_1">Paracetamol</option><option value="item_1_2">Sumo Cold</option></optgroup><optgroup label="X Ray"><option value="item_2_1">X Ray 1</option><option value="item_2_2">X Ray 2</option><option value="item_2_3">X Ray 3</option><option value="item_2_4">X Ray 4</option></optgroup><optgroup label="Ventilator"></optgroup><option value="item_3_1">Ventilator 1</option><option value="item_3_2">Ventilator 2</option><option value="item_3_3">Ventilator 3</option><option value="item_3_4">Ventilator 4</option></optgroup><optgroup label="ECG"><option value="item_4_1">ECG 1</optionECG 2</option><option value="item_4_3">ECG 3</option></optgroup><optgroup label="Airbed"><option value="item_5_1">Airbed 1</option><option value="item_5_2">Airbed 2</option><option value="item_5_3">Airbed 3</option></optgroup><otgroup label="Echo"><option value="item_6_1">Echo 1</option><option value="item_6_2">Echo 2</option><option value="item_6_3">Echo 3</option></otgroup><optgroup label="CPR"><option value="item_7_1">CPR 1</option><option value="item_7_2">CPR 2</option><option value="item_7_3">CPR 3</option><option value="item_7_4">CPR 4</option><option value="item_7_5">CPR 5</option></optgroup><optgroup label="MLC"><option value="item_8_1">MLC 1</option><option value="item_8_2">MLC 2</option><option value="item_8_3">MLC 3</option><option value="item_8_4">MLC 4</option><option value="item_8_5">MLC 5</option><option value="item_8_6">MLC 6</option></optgroup><optgroup label="Other Charges"><option value="item_9_1">GST</option><option value="item_9_2">Rent</option><option value="item_9_3">Treatment</option><option value="item_9_4">Maintainance</option></optgroup></select></div><div class="col-md-3"><label class="control-label" for="form_control_1">Quantity(1 to 50) : </label><input type="number" name="quantity1" min="1" max="50"></div></div></div> ';
		var $elem = $(category);
		console.log($elem);
		
		var no_order_items = $("input[name=no_of_order_items]").val();
		var new_no_items = parseInt(no_order_items)+1;
		$("input[name=no_of_order_items]").val(parseInt(no_order_items)+1);
		
		var abc = $elem.filter("div[id=category_1]");
		abc.attr("id", "category_"+new_no_items);
		abc.find("select[name=order_item1]").attr("name", "order_item"+new_no_items);
		abc.find("select[id=select_selectsplitter1]").attr("id", "select_selectsplitter"+new_no_items);
		abc.find("input[name=quantity1]").attr("name", "quantity"+new_no_items);
		abc.appendTo("div[id=newr]");
		
		$("select[id=select_selectsplitter"+new_no_items+"]").selectsplitter({
            selectSize: 4
        });

    });

	
    $("button[id=button2]").click(function(){
	
	    var no_order_items = $("input[name=no_of_order_items]").val();
		
		if (no_order_items>1){
		var new_no_items = parseInt(no_order_items)-1;
		$("div[id=category_"+no_order_items+"]").remove();
		$("input[name=no_of_order_items]").val(parseInt(no_order_items)-1);
		var abc = $("div[id=category_"+no_order_items+"]").clone();
		abc.appendTo("div[id=newr]");
		abc.attr("id", "category_"+new_no_items);
		abc.find("select[name=order_item"+no_order_items+"]").attr("name", "order_item"+new_no_items);
		abc.find("select[id=select_selectsplitter"+no_order_items+"]").attr("id", "select_selectsplitter"+new_no_items);
		abc.find("input[name=quantity"+no_order_items+"]").attr("name", "quantity"+new_no_items);
		}
		
		else {
		alert("Atleast one item should be present!");}

    });	

});


</script>
	
</body>

</html>