<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Current orders"; ?>
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
                               <div class="row" >
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

<table id="mytable">
      <thead>
        <tr>
    <th></th>
    <th>Treatment</th>
    <th>Charge</th>
  </tr>
  </thead>
  <tbody id="nbody">
        <tr>
        <td>1×</td>
         <td><b>Consulation Charges</b></td>
          <td>Rs.1500.00</td>
        </tr>
		      </tbody>
		<tr>
		<td> </td>
<td><b>Subtotal</b></td>
<td><span id="nsub">Rs.1500.00</span></td>
</tr>
          <tr>
		  <td> </td>
<td><b>Additional charges</b></td>
<td><span id="ndis">Rs.00.00</span></td>
</tr>
          <tr style="background-color:lightgrey;">
		  <td> </td>
<td><b>Total</b></td>
<td><b><span id="ntot">Rs.1500.00</span></b></td>
</tr>
          <tr>
		  <td> </td>
<td><b>Mode of Payement</b></td>
<td><span id="nmod">Cash</span></td>
</tr>

</table> <br><br>

    </div>

	<!--CUSTOMER INFO-->
	
    <div class="col-xs-12 col-sm-6 col-md-4">

<h1><span id="nname">Devesh Raghav</span></h1>
            <p><span id="ncontact">+91 9619364997<span></p>
            <p>Flat No. / House No. <span id="naddress1">I - 605 </span></p>
            <p><span id="naddress2">HDIL Premier Residencies, Kurla West</span></p>
            <p><span id="naddress3">Premier Colony (Kurla West)</span></p>
            <p>Mumbai</p>
  
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
        <script src="../dashboard/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
	
<script>

var text = {

"new" : {
"order_id_1" : {
"ncode" : "m9kn-k1ib",
"ntime" : "10/9/2017",
"nname" : "Devesh Raghav",
"ncontact" : "+91 9619364997",
"naddress1" :  "I - 605",
"naddress2" :  "HDIL Premier Residencies, Kurla West,",
"naddress3" :  "Premier Colony (Kurla West)",
"nsub" : "Rs.1500.00",
"ndis" : "Rs.00.00",
"ntot" : "Rs.1500.00",
"nmod" : "Cash",
"norder_items" : [
{
quantity : "1x",
item : "Consultation Charges",
price : "Rs.1500.00"
}
]
} ,
"order_id_2" : {
"ncode" : "d5vn-j6ga",
"ntime" : "21/10/2017",
"nname" : "Arpit Goyal",
"ncontact" : "+91 9619273648",
"naddress1" :  "B - 503",
"naddress2" :  "Gemini, Hiranandani Meadows",
"naddress3" :  "Thane",
"nsub" : "Rs.1000.00",
"ndis" : "Rs.0.00",
"ntot" : "Rs.1000.00",
"nmod" : "Cheque",
"norder_items" : [
{
quantity : "1x",
item : "ECG Report",
price : "Rs.1000.00"
}
]
} ,
"order_id_3" : {
"ncode" : "c8sh-n5sg",
"ntime" : "9/9/2017",
"nname" : "Amit Patil",
"ncontact" : "+91 9293847261",
"naddress1" :  "11",
"naddress2" :  "Rose Garden",
"naddress3" :  "Vashi",
"nsub" : "Rs.23650.00",
"ndis" : "Rs.00.00",
"ntot" : "Rs.23650.98",
"nmod" : "Debit Card",
"norder_items" : [
{
quantity : "1x",
item : "Lumbar Puncher",
price : "Rs.19000.00"
},
{
quantity : "1x",
item : "Bed Charges",
price : "Rs.2000.00"
},
{
quantity : "1x",
item : "Other Charges",
price : "Rs.2650.00"
}
]
} ,
"order_id_4" : {
"ncode" : "m5dh-n7ah",
"ntime" : "22/10/2017",
"nname" : "Kshitij Aggarwal",
"ncontact" : "+91 8473625194",
"naddress1" :  "1104",
"naddress2" :  "Kanakia Spaces",
"naddress3" :  "Grant Road",
"nsub" : "Rs.55345.00",
"ndis" : "Rs.1345.00",
"ntot" : "Rs.55345.00",
"nmod" : "Cash",
"norder_items" : [
{
quantity : "1x",
item : "Platelet Transfusion",
price : "Rs.35000.00"
},
{
quantity : "1x",
item : "Doctor Visit charges",
price : "Rs.10000.00"
},
{
quantity : "2x",
item : "Bed Charges",
price : "Rs.4000.00"
},
{
quantity : "1x",
item : "Monitor",
price : "Rs.5000.00"
}
]
} ,
"order_id_5" : {
"ncode" : "l7xh-m4ah",
"ntime" : "31/10/2017",
"nname" : "Vikas Yadav",
"ncontact" : "+91 9374920475",
"naddress1" :  "A - 903",
"naddress2" :  "Nightingale, Hiranandani Gardens",
"naddress3" :  "Powai",
"nsub" : "Rs.80245.00",
"ndis" : "Rs.245.00",
"ntot" : "Rs.80245.00",
"nmod" : "Cash",
"norder_items" : [
{
quantity : "2x",
item : "Room type:ICU",
price : "Rs.60000"
},
{
quantity : "1x",
item : "Doctor Charges",
price : "Rs.11000.00"
},
{
quantity : "1x",
item : "Monitor",
price : "Rs.5000.00"
},
{
quantity : "1x",
item : "Nursing Charges",
price : "Rs.4000.00"
}
]
} ,
"order_id_6" : {
"ncode" : "n4dh-x7ag",
"ntime" : "24/10/2017",
"nname" : "Vivek Johari",
"ncontact" : "+91 9837162836",
"naddress1" :  "45",
"naddress2" :  "ONGC Colony",
"naddress3" :  "Bandra West",
"nsub" : "Rs.6025.00",
"ndis" : "Rs.00.00",
"ntot" : "Rs.6025.00",
"nmod" : "Credit Card",
"norder_items" : [
{
quantity : "2x",
item : "Consulation Charges",
price : "Rs.3000.00"
},
{
quantity : "1x",
item : "X-Ray",
price : "Rs.2500.00"
},
{
quantity : "1x",
item : "Other Charges",
price : "Rs.525.00"
}
]
} ,
"order_id_7" : { 
"ncode" : "m4df-x8gh",
"ntime" : "8/11/17",
"nname" : "Devansh Singh",
"ncontact" : "+91 8271630472",
"naddress1" :  "2701",
"naddress2" :  "Orchid, Hiranandani Estate",
"naddress3" :  "Thane",
"nsub" : "Rs.2000.00",
"ndis" : "Rs.00.00",
"ntot" : "Rs.2000.00",
"nmod" : "Cash",
"norder_items" : [
{
quantity : "1x",
item : "Physio Visit",
price : "Rs.2000.00"
}
]
}
} ,

"processing" : {
"order_id_1" : {
"pcode" : "m9kn-k1ib",
"ptime" : "10/9/2017",
"pname" : "Ashish Chandorkar",
"paddress1" :  "A-1504",
"paddress2" :  "Evershine Sapphire",
"paddress3" :  "Chandivali",
"psub" : "Rs.112200.00",
"pdis" : "Rs.200.00",
"ptot" : "Rs.112200.00",
"pmod" : "",
"porder_items" : [
{
quantity : "3x",
item : "Room Type:ICU",
price : "Rs.90000.00"
},
{
quantity : "1x",
item : "Special Visit",
price : "Rs.12000.00"
},
{
quantity : "1x",
item : "Oxygen Plain",
price : "Rs.10000.00"
}
]
} ,
"order_id_2" : {
"pcode" : "z8fh-m4gh",
"ptime" : "1/11/17",
"pname" : "Ruchita Jadhav",
"pcontact" : "+91 9619602714",
"paddress1" :  "F - 1403",
"paddress2" :  "Rustom Homes",
"paddress3" :  "Mulund",
"psub" : "Rs.20110.00",
"pdis" : "Rs.110.00",
"ptot" : "Rs.20110.00",
"pmod" : "",
"porder_items" : [
{
quantity : "1x",
item : "Thrombolysis",
price : "Rs.18000.00"
},
{
quantity : "1x",
item : "Bed Charges",
price : "Rs.2000.00"
}
]
} ,
"order_id_3" : {
"pcode" : "m3ag-b6dh",
"ptime" : "9/11/2017",
"pname" : "Vikas Yadav",
"pcontact" : "+91 9820186884",
"paddress1" :  "B1/305",
"paddress2" :  "DSK Madhuban",
"paddress3" :  "Sakinaka Junction (Andheri East)",
"psub" : "Rs.2500.00",
"pdis" : "Rs.00.00",
"ptot" : "Rs.2500.00",
"pmod" : "",
"porder_items" : [
{
quantity : "1x",
item : "X-Ray",
price : "Rs.2500.00"
}
]
} 
} ,

"recent" : {
"order_id_1" : {
"rcode" : "m9kn-k1ib",
"rtime" : "09:45 PM",
"rname" : "Ashish Chandorkar",
"rcontact" : "+91 9619602714",
"raddress1" :  "A-1504",
"raddress2" :  "Evershine Sapphire",
"raddress3" :  "Chandivali",
"rsub" : "Rs.351.00",
"rdis" : "Rs.00.00",
"rtot" : "Rs.351.00",
"rmod" : "Cash on Delivery",
"rorder_items" : [
{
quantity : "1x",
item : "Nachos",
price : "Rs.67.00"
},
{
quantity : "1x",
item : "Veg. Manchurian",
price : "Rs.127.00"
},
{
quantity : "1x",
item : "Schezwan Rice",
price : "Rs.157.00"
}
]
} ,
"order_id_2" : {
"rcode" : "z8fh-m4gh",
"rtime" : "08:00 AM",
"rname" : "Ruchita Jadhav",
"rcontact" : "+91 9619602714",
"raddress1" :  "F - 1403",
"raddress2" :  "Rustom Homes",
"raddress3" :  "Mulund",
"rsub" : "Rs.501.00",
"rdis" : "Rs.50.00",
"rtot" : "Rs.451.00",
"rmod" : "Cash on Delivery",
"rorder_items" : [
{
quantity : "2x",
item : "Nawabi Pizza",
price : "Rs.454.00"
},
{
quantity : "1x",
item : "Coca Cola",
price : "Rs.47.00"
}
]
} ,
"order_id_3" : {
"rcode" : "m3ag-b6dh",
"rtime" : "03:45 PM",
"rname" : "Vikas Yadav",
"rcontact" : "+91 9820186884",
"raddress1" :  "B1/305",
"raddress2" :  "DSK Madhuban",
"raddress3" :  "Sakinaka Junction (Andheri East)",
"rsub" : "Rs.192.00",
"rdis" : "Rs.00.00",
"rtot" : "Rs.192.00",
"rmod" : "Online Payment",
"rorder_items" : [
{
quantity : "1x",
item : "Masala Mafia Pasta",
price : "Rs.247.00"
},
{
quantity : "3x",
item : "Bisleri",
price : "Rs.51.00"
},
{
quantity : "3x",
item : "Thumbs up",
price : "Rs.141.00"
}
]
} 
} 
};

function changeval(a, b) {
if(a == "new") {
console.log(text[a][b].ncode);
console.log(text[a][b].ntime);
console.log(text[a][b].nname);
console.log(text[a][b].ncontact);
console.log(text[a][b].naddress1);
console.log(text[a][b].naddress2);
console.log(text[a][b].naddress3);
console.log(text[a][b].nsub);
console.log(text[a][b].ndis);
console.log(text[a][b].ntot);
console.log(text[a][b].nmod);
document.getElementById("ncode").innerHTML = text[a][b].ncode;
document.getElementById("ntime").innerHTML = text[a][b].ntime;
document.getElementById("ncusname").innerHTML = text[a][b].nname;
document.getElementById("nname").innerHTML = text[a][b].nname;
document.getElementById("ncontact").innerHTML = text[a][b].ncontact;
document.getElementById("naddress1").innerHTML = text[a][b].naddress1;
document.getElementById("naddress2").innerHTML = text[a][b].naddress2;
document.getElementById("naddress3").innerHTML = text[a][b].naddress3; 
document.getElementById("nsub").innerHTML = text[a][b].nsub;
document.getElementById("ndis").innerHTML = text[a][b].ndis;
document.getElementById("ntot").innerHTML = text[a][b].ntot;
document.getElementById("nmod").innerHTML = text[a][b].nmod; 
	var order_items = text[a][b].norder_items;
	var rows = "";
	console.log(order_items[0]["quantity"]);
    for(var i=0;i<order_items.length;i++)
    {
        var tr="<tr>";
        var td1="<td>"+order_items[i]["quantity"]+"</td>";
        var td2="<td><b>"+order_items[i]["item"]+"</b></td>";
        var td3="<td>"+order_items[i]["price"]+"</td></tr>";

		var rows = rows + (tr+td1+td2+td3);
    }   
	document.getElementById("nbody").innerHTML = rows; 
}
if(a == "processing") {
console.log(text[a][b].pcode);
console.log(text[a][b].ptime);
console.log(text[a][b].pname);
console.log(text[a][b].pcontact);
console.log(text[a][b].paddress1);
console.log(text[a][b].paddress2);
console.log(text[a][b].paddress3);
console.log(text[a][b].psub);
console.log(text[a][b].pdis);
console.log(text[a][b].ptot);
console.log(text[a][b].pmod);
document.getElementById("pcode").innerHTML = text[a][b].pcode;
document.getElementById("ptime").innerHTML = text[a][b].ptime;
document.getElementById("pcusname").innerHTML = text[a][b].pname;
document.getElementById("pname").innerHTML = text[a][b].pname;
document.getElementById("pcontact").innerHTML = text[a][b].pcontact;
document.getElementById("paddress1").innerHTML = text[a][b].paddress1;
document.getElementById("paddress2").innerHTML = text[a][b].paddress2;
document.getElementById("paddress3").innerHTML = text[a][b].paddress3; 
document.getElementById("psub").innerHTML = text[a][b].psub;
document.getElementById("pdis").innerHTML = text[a][b].pdis;
document.getElementById("ptot").innerHTML = text[a][b].ptot;
document.getElementById("pmod").innerHTML = text[a][b].pmod; 
var order_items = text[a][b].porder_items;
	var rows = "";
	console.log(order_items[0]["quantity"]);
    for(var i=0;i<order_items.length;i++)
    {
        var tr="<tr>";
        var td1="<td>"+order_items[i]["quantity"]+"</td>";
        var td2="<td><b>"+order_items[i]["item"]+"</b></td>";
        var td3="<td>"+order_items[i]["price"]+"</td></tr>";

		var rows = rows + (tr+td1+td2+td3);
    }   
	document.getElementById("pbody").innerHTML = rows; 
}
if(a == "recent") {
console.log(text[a][b].rcode);
console.log(text[a][b].rtime);
console.log(text[a][b].rname);
console.log(text[a][b].rcontact);
console.log(text[a][b].raddress1);
console.log(text[a][b].raddress2);
console.log(text[a][b].raddress3);
console.log(text[a][b].rsub);
console.log(text[a][b].rdis);
console.log(text[a][b].rtot);
console.log(text[a][b].rmod);
document.getElementById("rcode").innerHTML = text[a][b].rcode;
document.getElementById("rtime").innerHTML = text[a][b].rtime;
document.getElementById("rcusname").innerHTML = text[a][b].rname;
document.getElementById("rname").innerHTML = text[a][b].rname;
document.getElementById("rcontact").innerHTML = text[a][b].rcontact;
document.getElementById("raddress1").innerHTML = text[a][b].raddress1;
document.getElementById("raddress2").innerHTML = text[a][b].raddress2;
document.getElementById("raddress3").innerHTML = text[a][b].raddress3; 
document.getElementById("rsub").innerHTML = text[a][b].rsub;
document.getElementById("rdis").innerHTML = text[a][b].rdis;
document.getElementById("rtot").innerHTML = text[a][b].rtot;
document.getElementById("rmod").innerHTML = text[a][b].rmod; 
var order_items = text[a][b].rorder_items;
	var rows = "";
	console.log(order_items[0]["quantity"]);
    for(var i=0;i<order_items.length;i++)
    {
        var tr="<tr>";
        var td1="<td>"+order_items[i]["quantity"]+"</td>";
        var td2="<td><b>"+order_items[i]["item"]+"</b></td>";
        var td3="<td>"+order_items[i]["price"]+"</td></tr>";

		var rows = rows + (tr+td1+td2+td3);
    }   
	document.getElementById("rbody").innerHTML = rows; 
}

}

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


</script>
	
</body>

</html>