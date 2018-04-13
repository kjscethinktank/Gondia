<!DOCTYPE html>
<?php
error_reporting(0);
include('database.php');
$total=0;
$label="<span>";
$label1="</span>";
//$query= "SELECT P_id from patient";
//$result = mysqli_query ($db,$query);

session_start();
$type=$_SESSION['loggedInType'];
   if($type!='admin' && $type!='doctor' && $type!='accountant')
   {
       header('Location:login.php');
   }

include('config.php');





?>

<html lang="en">
<body onload="type()">
<?php $page_title = "Billing"; ?>
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
                            <!-- BEGIN PAGE HEADER-->
                            <ul class="nav nav-tabs" >
                                <li class="active" ><a data-toggle="tab" id="n" href="#new">Bills</a></li>
                                <li><a data-toggle="tab" id="p" href="#processing">Pending <span class="badge badge-danger">3</span></a></li>
                                <li><a data-toggle="tab" id="r" href="#"></a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="new" class="tab-pane fade in active">
                                  <div class="portlet light">  
                               <div class="row">

							   <!--CUSTOMER LIST-->
                               <div class="col-xs-12 col-sm-4 col-lg-3">
							   
                                          <div class="list-group" style="height:500px;overflow:hidden; overflow-y:scroll;">
                                          <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_1')" > 
                                              <h4 class="list-group-item-heading">Devesh Raghav</h4>
                                              <p class="list-group-item-text">Rs. 1500.00</p>
                                             
                                          </a>
                                          <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_2')">
                                              <h4 class="list-group-item-heading">Arpit Goyal</h4>
                                              <p class="list-group-item-text">Rs. 1000.00</p>
                                             
                                          </a>
                                          <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_3')">
                                           <h4 class="list-group-item-heading">Amit Patil</h4>
                                           <p class="list-group-item-text">Rs. 23650.00</p>
                                       </a>
                                          <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_4')">
                                           <h4 class="list-group-item-heading">Kshitij Aggarwal</h4>
                                           <p class="list-group-item-text">Rs. 55345.00</p>
                                       </a>
                                          <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_5')">
                                           <h4 class="list-group-item-heading">Vikas Yadav</h4>
                                           <p class="list-group-item-text">Rs. 80245.00</p>
                                       </a>
                                          <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_6')">
                                           <h4 class="list-group-item-heading">Vivek Johari</h4>
                                           <p class="list-group-item-text">Rs. 6025.00</p>
                                       </a>
									   <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_7')">
                                           <h4 class="list-group-item-heading">Devansh Singh</h4>
                                           <p class="list-group-item-text">Rs. 2000.00</p>
                                       </a>
                                   </div>
                                   </div>
                               
							   <!--ITEM LIST AND CUSTOMER INFO-->
							   <div class="col-xs-12 col-sm-8 col-lg-9">
                               

                              <div class="container-fluid">
  <!--ORDER NUMBER AND TIME-->
  <div class="row">
    <div class="col-sm-12">
    <p style="text-align:center; padding:10px;"><b>  Patient code :- <span id="ncode">m9kn-k1ib</span> &nbsp; &nbsp; &nbsp; &nbsp; Date of Admission :- 
	<span id="ntime">10/09/2017</span> &nbsp; &nbsp; &nbsp; &nbsp; Patient :- <span id="ncusname">Devesh Raghav</span>   </b></p>
    </div>
  </div><br>

<!--CUSTOMER INFO AND ORDER-->
  <div class="row">
  
  <!--ITEM AND TOTAL TABLES-->

    <div class="col-xs-12 col-sm-6 col-md-8">
    
    <form action="" method="POST">
    <label>Patient id:</label><input type="textfield" id="text" name="text">
    <button  type="button" onclick="update(text.value); updateinfo(text.value);">Generate</button>

    </form>
<table id="mytable">
      <thead>
        <tr>
    
    
    <th>Treatment</th>
    <th>Charge</th>
    <th>Quantity</th>
            <th>Total</th>
  </tr>
  </thead>
  <tbody id="bill_table" name="bill_table">




  </tbody>
       

</table> <br><br>
        <span><label>Total Amount:</label><p id="total_amount"></p></span>
    </div>

	<!--CUSTOMER INFO-->
	
    <div class="col-xs-12 col-sm-6 col-md-4">

<h1><span id="bname"></span></h1>
        <p><span id="bcontact"></span></p>
            <p><span id="baddress1"></span></p>


  </div>


<br><br>

</div>

<!--TIMELINE AND BUTTONS-->

<div class="row">

<!--TIMELINE-->

<div class="col-xs-12 col-sm-6 col-md-8">
<p style="color:red;"> INVOICE CREATED : 29 May, 2016 at 08:00PM </p>
</div>

<!--BUTTONS-->
<div class="col-xs-12 col-sm-6 col-md-4">
 <button type="button" class="btn btn-success btn-lg green-jungle"><i class="fa fa-download"></i> Generate Bill</button><br><br>

 <!--button type="button" class="btn btn-danger btn-lg" data-toggle="modal" href="#myModal">Decline</button-->
 
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reason for decline :</h4>
        </div>
        <div class="modal-body">
<div class="list-group">
                                          <a href="#" class="list-group-item">
                                              <h5 class="list-group-item-heading">Sorry, no ingredients available !</h5>
                                             
                                          </a>
										  <a href="#" class="list-group-item">
                                              <h5 class="list-group-item-heading">Sorry, delivery not possible !</h5>
                                             
                                          </a>
										  <a href="#" class="list-group-item">
                                              <h5 class="list-group-item-heading">Other : </h5>
                                              <input class="form-control" type="text">
                                          </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
        </div>
      </div>
    </div>
    </div>
  </div>
 
  
 

 </div>                                   

</div>

</div>

</div>

</div>

</div>


</div>

                                <div id="processing" class="tab-pane fade">
                                <div class="portlet light">  
                               <div class="row" >

							   <!--CUSTOMER LIST-->
                               <div class="col-xs-12 col-sm-4 col-lg-3">
							   
                                          <div class="list-group" style="height:500px;overflow:hidden; overflow-y:scroll;">
                                          <a href="#" class="list-group-item" onclick="changeval('processing', 'order_id_1')">
                                              <h4 class="list-group-item-heading">Ashish Chandorkar</h4>
                                              <p class="list-group-item-text">Rs. 112200.00</p><br>
                                              <span class="label label-pill label-info">Pending</span>
                                          </a>
                                          <a href="#" class="list-group-item" onclick="changeval('processing', 'order_id_2')">
                                              <h4 class="list-group-item-heading">Ruchita Jadhav</h4>
                                              <p class="list-group-item-text">Rs. 20110.00</p><br>
                                              <span class="label label-pill label-info">Pending</span>
                                             
                                          </a>
                                          <a href="#" class="list-group-item" onclick="changeval('processing', 'order_id_3')">
                                           <h4 class="list-group-item-heading">Vikas Yadav</h4>
                                           <p class="list-group-item-text">Rs. 2500.00</p><br>
                                              <span class="label label-pill label-info">Pending</span>
                                       </a>
                                   </div>
                                   </div>
                               
							   <!--ITEM LIST AND CUSTOMER INFO-->
							   <div class="col-xs-12 col-sm-8 col-lg-9">
                               

                              <div class="container-fluid">
  <!--ORDER NUMBER AND TIME-->
  <div class="row">
    <div class="col-sm-12">
    <p style="text-align:center; padding:10px;"><b>  Patient code :- <span id="pcode">m9kn-k1ib</span> &nbsp; &nbsp; &nbsp; &nbsp; 
	Date of Admission :- <span id="ptime">10/9/2017</span> &nbsp; &nbsp; &nbsp; &nbsp; Customer :- <span id="pcusname">Ashish Chandorkar</span>   </b></p>
    </div>
  </div><br>

<!--CUSTOMER INFO AND ORDER-->
  <div class="row">
  
  <!--ITEM AND TOTAL TABLES-->

    <div class="col-xs-12 col-sm-6 col-md-8">

<table id="mytable">
      <thead>
        <tr>
    <th></th>
    <th>Treatment</th>
    <th>Charge</th>
  </tr>
  </thead>
  <tbody id="pbody">
        <tr>
        <td>3×</td>
         <td><b>Room Type:ICU</b></td>
          <td>Rs.90000.00</td>
        </tr>
        <tr>
        <td>1×</td>
         <td><b>Special Visit</b></td>
          <td>Rs.12000.00</td>
        </tr>
        <tr>
        <td>1×</td>
         <td><b>Oxygen Plain</b></td>
          <td>Rs.10000.00</td>
        </tr>
		 </tbody>
        <tr>
		<td> </td>
<td><b>Subtotal</b></td>
<td><span id="psub">Rs.112000.00</span></td>
</tr>
          <tr>
		  <td> </td>
<td><b>Additional Charges</b></td>
<td><span id="pdis">Rs.200.00</span></td>
</tr>
          <tr style="background-color:lightgrey;">
		  <td> </td>
<td><b>Total</b></td>
<td><b><span id="ptot">Rs.112200.00</span></b></td>
</tr>
          <tr>
		  <td> </td>
<td><b></b></td>
<td><span id="pmod"></span></td>
</tr>
     
</table> <br><br>

    </div>

	<!--CUSTOMER INFO-->
	
    <div class="col-xs-12 col-sm-6 col-md-4">

<h1><span id="pname">Ashish Chandorkar</span></h1>
            <p><span id="pcontact">+91 9597370400</span></p>
            <p>Flat No. / House No. <span id="paddress1">A-1504</span> </p>
            <p><span id="paddress2">Evershine Sapphire</span></p>
            <p><span id="paddress3">Chandivali</span></p>
            <p>Mumbai</p>
  
  
  </div>


<br><br>

</div>

<!--TIMELINE AND BUTTONS-->

<div class="row">

<!--TIMELINE-->

<div class="col-xs-12 col-sm-6 col-md-8">
<div class="portlet-body">

                                    <div class="cd-horizontal-timeline mt-timeline-horizontal">
                                    <!-- .cd-timeline-navigation -->
                                        <div class="timeline">
                                         <!-- .events-wrapper -->
                                            <div class="events-wrapper">
                                            <!-- .events -->
                                                <div class="events">
                                                    <ol>
                                                        <li>
                                                            <a href="#0" data-date="29/05/2016T20:00"  class="border-after-red bg-after-red selected">Created</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0" data-date="29/05/2016T20:05"  class="border-after-red bg-after-red ">Accepted</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0" data-date="29/05/2016T21:30"  class="border-after-red bg-after-red ">Dispatched</a>
                                                        </li>
                                                    </ol>
                                                    <span class="filling-line bg-red" aria-hidden="true"></span>
                                                </div>
                                                <!-- .events -->
                                            </div>
                                            <!-- .events-wrapper -->
                                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                                <li>
                                                    <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="next btn btn-outline red md-skip">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- .cd-timeline-navigation -->
                                        </div>
                                        <!-- .timeline -->
                                        <div class="events-content">
                                            <ol>
                                                <li class="selected" data-date="29/05/2016T20:00">
                
                                                    <div class="mt-content border-grey-steel">
                                                        <p>ORDER CREATED : 29 May, 2016 at 08:00PM</p>
                                                    
                                                    </div>
                                                </li>
                                                <li data-date="29/05/2016T20:05">
                
                                                    <div class="mt-content border-grey-steel">
                                                        <p>ORDER ACCEPTED : 29 May, 2016 at 08:05PM</p>
                                                    
                                                    </div>
                                                </li>
                                                <li  data-date="29/05/2016T21:30">
                
                                                    <div class="mt-content border-grey-steel">
                                                        <p>ORDER DISPATCHED : 29 May, 2016 at 09:30PM</p>
                                                    
                                                    </div>
                                                </li>
                                                
                                            </ol>
                                        </div>
                                        <!-- .events-content -->
									</div>
</div>
</div>

<!--BUTTONS-->
<div class="col-xs-12 col-sm-6 col-md-4">
 
 <!--button type="button" class="btn btn-danger btn-lg">Pending</button><br><br-->
 <button type="button" class="btn btn-success btn-lg green-jungle">Pay and Generate</button>    
 </div>                                   

</div>

</div>

</div>

</div>


</div>

</div>

                                <div id="recent" class="tab-pane fade">
                                <div class="portlet light">  
                               <div class="row" >
							   <!--CUSTOMER LIST-->
                               <div class="col-xs-12 col-sm-4 col-lg-3">
							   
                                          <div class="list-group" style="height:500px;overflow:hidden; overflow-y:scroll;">
                                          <a href="#" class="list-group-item" onclick="changeval('recent', 'order_id_1')">
                                              <h4 class="list-group-item-heading" >Ashish Chandorkar</h4>
                                              <p class="list-group-item-text">Rs. 112200.00</p><br>
                                              <span class="label label-pill label-info">Pending</span>
                                          </a>
                                          <a href="#" class="list-group-item" onclick="changeval('recent', 'order_id_2')">
                                              <h4 class="list-group-item-heading">Ruchita Jadhav</h4>
                                              <p class="list-group-item-text">Rs. 20110.00</p><br>
                                              <span class="label label-pill label-info">Pending</span>
                                             
                                          </a>
                                          <a href="#" class="list-group-item" onclick="changeval('recent', 'order_id_3')">
                                           <h4 class="list-group-item-heading">Vikas Yadav</h4>
                                           <p class="list-group-item-text">Rs. 2500.65</p><br>
                                              <span class="label label-pill label-info">Pending</span>
                                       </a>
                                   </div>
                                   </div>
                               
							   <!--ITEM LIST AND CUSTOMER INFO-->
							   <div class="col-xs-12 col-sm-8 col-lg-9">
                               

                              <div class="container-fluid">
  <!--ORDER NUMBER AND TIME-->
  <div class="row">
    <div class="col-sm-12">
    <p style="text-align:center; padding:10px;"><b>  Order code :- <span id="rcode">m9kn-k1ib</span> &nbsp; &nbsp; &nbsp; &nbsp; 
	Date of Admission :- <span id="rtime">10/9/2017</span> &nbsp; &nbsp; &nbsp; &nbsp; Customer :- <span id="rcusname">Ashish Chandorkar</span>   </b></p>
    </div>
  </div><br>

<!--CUSTOMER INFO AND ORDER-->
  <div class="row">
  
  <!--ITEM AND TOTAL TABLES-->

    <div class="col-xs-12 col-sm-6 col-md-8">

<table class="item">
      <thead>
        <tr>
    <th></th>
    <th>Treatment</th>
    <th>Charge</th>
  </tr>
  </thead>
  <tbody id="rbody">
        <tr>
        <td>3×</td>
         <td><b>Room type:ICU</b></td>
          <td>Rs.90000.00</td>
        </tr>
        <tr>
        <td>1×</td>
         <td><b>Special Visit</b></td>
          <td>Rs.12000.00</td>
        </tr>
        <tr>
        <td>1×</td>
         <td><b>Oxygen Plain</b></td>
          <td>Rs.10000.00</td>
        </tr> 
		</tbody>
        <tr>
		<td> </td>
<td><b>Subtotal</b></td>
<td><span id="rsub">Rs.112000.00</span></td>
</tr>
          <tr>
		  <td> </td>
<td><b>Additional Charges</b></td>
<td><span id="rdis">Rs.200.00</span></td>
</tr>
          <tr style="background-color:lightgrey;">
		  <td> </td>
<td><b>Total</b></td>
<td><b><span id="rtot">Rs.112200.00</span></b></td>
</tr>
          <tr>
		  <td> </td>
<td><b></b></td>
<td><span id="rmod"></span></td>
</tr>
     
</table> <br><br>

    </div>

	<!--CUSTOMER INFO-->
	
    <div class="col-xs-12 col-sm-6 col-md-4">

<h1><span id="rname">Ashish Chandorkar</span></h1>
            <p><span id="rcontact">+91 9597370400</span></p>
            <p>Flat No. / House No. <span id="raddress1">A-1504</span> </p>
            <p><span id="raddress2">Evershine Sapphire</span></p>
            <p><span id="raddress3">Chandivali</span></p>
            <p>Mumbai</p>
  
  </div>


<br><br>

</div>

<!--TIMELINE AND BUTTONS-->

<div class="row">

<!--TIMELINE-->

<div class="col-xs-12 col-sm-6 col-md-8">
<div class="portlet-body">

                                    <div class="cd-horizontal-timeline mt-timeline-horizontal">
                                    <!-- .cd-timeline-navigation -->
                                        <div class="timeline">
                                         <!-- .events-wrapper -->
                                            <div class="events-wrapper">
                                            <!-- .events -->
                                                <div class="events">
                                                    <ol>
                                                        <li>
                                                            <a href="#0" data-date="29/05/2016T20:00"  class="border-after-red bg-after-red selected">Created</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0" data-date="29/05/2016T20:05"  class="border-after-red bg-after-red ">Accepted</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0" data-date="29/05/2016T21:30"  class="border-after-red bg-after-red ">Dispatched</a>
                                                        </li>
                                                    </ol>
                                                    <span class="filling-line bg-red" aria-hidden="true"></span>
                                                </div>
                                                <!-- .events -->
                                            </div>
                                            <!-- .events-wrapper -->
                                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                                <li>
                                                    <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="next btn btn-outline red md-skip">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- .cd-timeline-navigation -->
                                        </div>
                                        <!-- .timeline -->
                                        <div class="events-content">
                                            <ol>
                                                <li class="selected" data-date="29/05/2016T20:00">
                
                                                    <div class="mt-content border-grey-steel">
                                                        <p>ORDER CREATED : 29 May, 2016 at 08:00PM</p>
                                                    
                                                    </div>
                                                </li>
                                                <li data-date="29/05/2016T20:05">
                
                                                    <div class="mt-content border-grey-steel">
                                                        <p>ORDER ACCEPTED : 29 May, 2016 at 08:05PM</p>
                                                    
                                                    </div>
                                                </li>
                                                <li  data-date="29/05/2016T21:30">
                
                                                    <div class="mt-content border-grey-steel">
                                                        <p>ORDER DISPATCHED : 29 May, 2016 at 09:30PM</p>
                                                    
                                                    </div>
                                                </li>
                                                
                                            </ol>
                                        </div>
                                        <!-- .events-content -->
									</div>
</div>
</div>

<!--BUTTONS-->
<div class="col-xs-12 col-sm-6 col-md-4">
 
 </div>                                   

</div>

</div>

</div>

</div>


</div>

</div>


</div>

</div>

<?php include("includes/footer.php"); ?>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
	
<script>





function loadtab(a) {
          // Javascript to enable link to tab
		  if (a) {
            console.log(a);
            $('.nav-tabs a[id='+a+']').tab('show');
          }
}		

$(function() {
          // Javascript to enable link to tab
          var hash = document.location.hash;
          hash = hash.substring(1);
		  if (hash) {
            console.log(hash);
            $('.nav-tabs a[id='+hash+']').tab('show');
          }
        });












    function update(str){
        var id = str;

        var table = document.getElementById('bill_table');
        table.innerHTML="";
        var amo= document.getElementById('total_amount');
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var myObj = JSON.parse(this.responseText);



                    var tr = document.createElement("tr");
                    var tdname = document.createElement("td");
                    tdname.value = myObj.inven_name;
                    tdname.textContent = myObj.inven_name;
                    tr.appendChild(tdname);

                    var tdcost = document.createElement("td");
                    tdcost.value = myObj.inven_name;
                    tdcost.textContent = myObj.inven_cost;
                    tr.appendChild(tdcost);


                    var tdquan = document.createElement("td");
                    tdquan.value = myObj.inven_name;
                    tdquan.textContent = myObj.quantity;
                    tr.appendChild(tdquan);


                    var tdtot = document.createElement("td");
                    tdtot.value = myObj.inven_name;
                    tdtot.textContent = myObj.total;
                    tr.appendChild(tdtot);


                    table.appendChild(tr);


                amo.value=myObj.grandtotal;
                amo.textContent=myObj.grandtotal;

            }


        };

        xmlhttp.open("GET", "bill_php.php?id=" + id, true);
        xmlhttp.setRequestHeader("Content-type", "application/json");
        xmlhttp.send();

    }
    function updateinfo(str)
    {
        var id = str;



        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var myObj = JSON.parse(this.responseText);

                document.getElementById('bname').innerHTML=myObj.P_name;
                document.getElementById('bcontact').innerHTML=myObj.P_phone;
                document.getElementById('baddress1').innerHTML=myObj.P_address;

            }


        };

        xmlhttp.open("GET", "bill_info_php.php?id=" + id, true);
        xmlhttp.setRequestHeader("Content-type", "application/json");
        xmlhttp.send();


    }

</script>








</body>
</html>