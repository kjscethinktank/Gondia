<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Menu"; ?>
<?php $menu_url = "assets/global/plugins/menu.css"; ?>

<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>

<!-- <?php
//require_once("includes/config.php");
//now we can use our config file
//include(ROOT_PATH . "includes/header.php");
?> -->
</head>

    <?php include("includes/bodyheader.php"); ?>

    <?php include("includes/navigation.php"); ?>

       
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <ul class="nav nav-tabs" >
                    <li class="active" ><a data-toggle="tab" id="c" href="#new"> Categories </a></li>
                    <li><a data-toggle="tab" id="i" href="#items" >Items</a></li>
                    <div class="col-sm-3 col-md-3 pull-right">
                        
                    </div> 
                </ul>

                <div class="tab-content">
                    <div id="new" class="tab-pane fade in active">
                        <div class="portlet light">  
                            <div class="row">
                                <!--CATEGORY LIST-->
                                <div class="col-xs-12 col-sm-4 col-lg-3">

                                    <div class="list-group" style="height:500px;overflow:hidden; overflow-y:scroll;">
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_1')" > 
                                            <h4 class="list-group-item-heading">Appetizers</h4>
                                        </a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_2')">
                                            <h4 class="list-group-item-heading">Snacks</h4>
                                        </a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_3')">
                                            <h4 class="list-group-item-heading">Maggi</h4>  
                                        </a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_4')">
                                            <h4 class="list-group-item-heading">Garlic Bread</h4>
                                        </a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_5')">
                                            <h4 class="list-group-item-heading">Sandwiches</h4> 
    									</a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_6')">
                                            <h4 class="list-group-item-heading">Pav Bhaji<span id="b" class="badge badge-danger">Unavailable</span></h4>
                                        </a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_7')">
                                            <h4 class="list-group-item-heading">Pastas</h4>
                                        </a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_8')">
                                            <h4 class="list-group-item-heading">Pizza</h4> 
                                        </a>
    									<a href="#" class="list-group-item" onclick="changeval('new', 'order_id_9')">
                                            <h4 class="list-group-item-heading">Chinese Dishes</h4> 
                                        </a>
                                        <a href="#" class="list-group-item" onclick="changeval('new', 'order_id_10')">
                                            <h4 class="list-group-item-heading">Soft Drinks<span id="b" class="badge badge-danger">Unavailable</span></h4>
                                        </a>
                                    </div>
                                </div>

                                <!--ITEM LIST AND CUSTOMER INFO-->
                                <div class="col-xs-12 col-sm-8 col-lg-9">


                                    <div class="container-fluid">

                                        <!--CUSTOMER INFO AND ORDER-->
                                        <div class="row">

                                            <!--ITEM AND TOTAL TABLES-->

                                            <div class="col-xs-12 col-sm-8 col-md-12">

                                                <table id="mytable" >
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-4"><h3><b>Item</b></h3></th>
                                                            <th class="col-md-2"><h3><b>Quantity</b></h3></th>
                                                            <th class="col-md-offset-3 col-md-3 "><h3><b>Availabilty</b></h3></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="nbody">

                                                        <tr>
                                                            <td><b>Nachos</b></td>
                                                            <td><input type="number" id="1" name="demo_vertical" min=0></td>
                                                            <td><input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><b>French Fries</b></td>
                                                            <td><input type="number" id="2" name="demo_vertical" min=0></td>
                                                            <td><input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger"></td>
                                                        </tr>

                                                    </tbody>
                                                </table> <br><br>
                                            </div>
                                            <br><br>
                                        </div>
                                            

                                        <div class="row">

                                            <!--BUTTONS-->
                                            <div class="col-xs-12 col-sm-6 col-md-4">

                                                <button type="button" class="btn yellow-crusta btn-lg" data-toggle="modal" href="#myModal">Submit</button><br><br>

                                                <div class="modal fade" id="myModal" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Submit Quantities :</h4>
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
                    <div id="items" class="tab-pane fade in ">
                        <div class="portlet light">  
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="row" style="background-color:white;">
                                        <!--ITEMS TABLES-->
                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                            <table id="itemTable" style="width:100%;">
                                                <thead>
                                                    <tr>
    												    <th class="col-md-4"><h3><b>Item</b></h3></th>
                                                        <th class="col-md-2"><h3><b>Quantity</b></h3></th>
                                                        <th class="col-md-offset-3 col-md-3 "><h3><b>Availabilty</b></h3></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="ibody">

                            
                                                </tbody>
                                            </table> 
                                        </div>
                                    </div>
                                            
                                    <div class="row" id = "itemSubmit">

                                        <!--BUTTONS-->
                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                            <br><button type="button" class="btn yellow-crusta btn-lg" data-toggle="modal" href="#mModal">Submit</button><br><br>

                                            <div class="modal fade" id="mModal" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Submit Quantities :</h4>
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
                                                          <button type="button" class="btn btn-default text-center" data-dismiss="modal" >Submit</button>
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
        </div>
    </div>

<?php include("includes/footer.php"); ?>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../dashboard/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
<script src="../dashboard/assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- AVAILABILTY BUTTON-->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../dashboard/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../dashboard/assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->


<script>

    var text = {    

        "new" : {
            "order_id_1" : {

                "norder_items" : [
                {
                    item : "Nachos",
                    value : "1.1"
                
                },
                {
                    item : "French Fries",
                    value : "1.2"
                }
                ]
            } ,
            
            "order_id_2" : {

                "norder_items" : [
                {
                    item : "Cheese Wafers",
                    value : "2.1"
                },
                {
                    item : "Tasty Nuts",
                    value : "2.2"
                },
                {
                    item : "Chana Chor",
                    value : "2.3"
                },
                {
                    item : "Peri peri chips",
                    value : "2.4"
                }
                ]
            } ,
            
            "order_id_3" : {

                "norder_items" : [
                {
                    item : "Maggi",
                    value : "3.1"
                },
                {
                    item : "Cheese Maggi",
                    value : "3.2"
                },
                {
                    item : "Schezwan Maggi",
                    value : "3.3"
                },
                {
                    item : "Schezwan Cheese Maggi",
                    value : "3.4"
                }
                ]
            } ,
            
            "order_id_4" : {

                "norder_items" : [
                {
                    item : "Cheese Garlic Bread",
                    value : "4.1"
                },
                {
                    item : "Corn Garlic Bread",
                    value : "4.2"
                },
                {
                    item : "Garlic Bread",
                    value : "4.3"
                }

                ]
            } ,
            
            "order_id_5" : {

                "norder_items" : [
                {
                    item : "Grilled Vegetable Sandwich",
                    value : "5.1"
                },
                {
                    item : "Cheese Grilled Sandwich",
                    value : "5.2"
                },
                {
                    item : "Spicy Melt Paneer Sandwich",
                    value : "5.3"
                }
                ]
            } ,
            
            "order_id_6" : {

                "norder_items" : [
                {
                    item : "Masala Pav",
                    value : "6.1"
                },
                {
                    item : "Pav Bhaji",
                    value : "6.2"
                },
                {
                    item : "Cheese Pav Bhaji",
                    value : "6.3"
                }
                ]
            } ,
            
            "order_id_7" : {

                "norder_items" : [
                {
                    item : "All Arrabiata Pasta",
                    value : "7.1"
                },
                {
                    item : "Masala Mafia Pasta",
                    value : "7.2"
                },
                {
                    item : "Pasta Paprika",
                    value : "7.3"
                },
                {
                    item : "Pasta Barbaresca",
                    value : "7.4"
                },
                {
                    item : "Pasta All Bakunin",
                    value : "24"
                }
                ]
            } ,
            
            "order_id_8" : {

                "norder_items" : [
                {
                    item : "Pesto Pizza",
                    value : "8.1"
                },
                {
                    item : "Nawabi Pizza",
                    value : "8.2"
                },
                {
                    item : "Exotic Pizza",
                    value : "8.3"
                },
                {
                    item : "Margherita Pizza",
                    value : "8.4"
                },
                {
                    item : "Fantasy Pizza",
                    value : "8.5"
                },
                {
                    item : "Pizza Alla Vodka",
                    value : "8.6"
                }
                ]
            } ,
            
            "order_id_9" : {

                "norder_items" : [
                {
                    item : "Schezwan Rice",
                    value : "9.1"
                },
                {
                    item : "Triple Schezwan Fried Rice",
                    value : "9.2"
                },
                {
                    item : "Veg Fried Rice",
                    value : "9.3"
                },
                {
                    item : "Paneer Chilly Fried Rice",
                    value : "9.4"
                },
                {
                    item : "Dry Manchurian",
                    value : "9.5"
                },
                {
                    item : "Veg Noodles",
                    value : "9.6"
                },
                {
                    item : "Schezwan Fried Rice",
                    value : "9.7"
                },
                {
                    item : "Schezwan Noodles",
                    value : "9.8"
                },
                {
                    item : "Triple Schezwan Noodles",
                    value : "9.9"
                },
                {
                    item : "Paneer Chilly Noodles",
                    value : "9.10"
                }
                ]
            } ,
            
            "order_id_10" : {

                "norder_items" : [
                {
                    item : "Bisleri",
                    value : "10.1"
                },
                {
                    item : "Pepsi",
                    value : "10.2"
                },
                {
                    item : "Coca Cola",
                    value : "10.3"
                },
                {
                    item : "Thumbs Up",
                    value : "10.4"
                },
                {
                    item : "Slice",
                    value : "10.5"
                },
                {
                    item : "Mirinda",
                    value : "10.6"
                },
                {
                    item : "7 Up",
                    value : "10.7"
                },
                {
                    item : "Red Bull",
                    value : "10.8"
                }
                
                ]
            }

        },

        "all" : {
            
            "all_items" : [
                {
                    item : "Nachos",
                    value : "1.1"
                
                },
                {
                    item : "French Fries",
                    value : "1.2"
                },
                {
                    item : "Cheese Wafers",
                    value : "2.1"
                },
                {
                    item : "Tasty Nuts",
                    value : "2.2"
                },
                {
                    item : "Chana Chor",
                    value : "2.3"
                },
                {
                    item : "Peri peri chips",
                    value : "2.4"
                },
                {
                    item : "Maggi",
                    value : "3.1"
                },
                {
                    item : "Cheese Maggi",
                    value : "3.2"
                },
                {
                    item : "Schezwan Maggi",
                    value : "3.3"
                },
                {
                    item : "Schezwan Cheese Maggi",
                    value : "3.4"
                },
                {
                    item : "Cheese Garlic Bread",
                    value : "4.1"
                },
                {
                    item : "Corn Garlic Bread",
                    value : "4.2"
                },
                {
                    item : "Garlic Bread",
                    value : "4.3"
                },
                {
                    item : "Grilled Vegetable Sandwich",
                    value : "5.1"
                },
                {
                    item : "Cheese Grilled Sandwich",
                    value : "5.2"
                },
                {
                    item : "Spicy Melt Paneer Sandwich",
                    value : "5.3"
                },
                {
                    item : "Masala Pav",
                    value : "6.1"
                },
                {
                    item : "Pav Bhaji",
                    value : "6.2"
                },
                {
                    item : "Cheese Pav Bhaji",
                    value : "6.3"
                },
                {
                    item : "All Arrabiata Pasta",
                    value : "7.1"
                },
                {
                    item : "Masala Mafia Pasta",
                    value : "7.2"
                },
                {
                    item : "Pasta Paprika",
                    value : "7.3"
                },
                {
                    item : "Pasta Barbaresca",
                    value : "7.4"
                },
                {
                    item : "Pasta All Bakunin",
                    value : "24"
                },
                {
                    item : "Pesto Pizza",
                    value : "8.1"
                },
                {
                    item : "Nawabi Pizza",
                    value : "8.2"
                },
                {
                    item : "Exotic Pizza",
                    value : "8.3"
                },
                {
                    item : "Margherita Pizza",
                    value : "8.4"
                },
                {
                    item : "Fantasy Pizza",
                    value : "8.5"
                },
                {
                    item : "Pizza Alla Vodka",
                    value : "8.6"
                },
                {
                    item : "Schezwan Rice",
                    value : "9.1"
                },
                {
                    item : "Triple Schezwan Fried Rice",
                    value : "9.2"
                },
                {
                    item : "Veg Fried Rice",
                    value : "9.3"
                },
                {
                    item : "Paneer Chilly Fried Rice",
                    value : "9.4"
                },
                {
                    item : "Dry Manchurian",
                    value : "9.5"
                },
                {
                    item : "Veg Noodles",
                    value : "9.6"
                },
                {
                    item : "Schezwan Fried Rice",
                    value : "9.7"
                },
                {
                    item : "Schezwan Noodles",
                    value : "9.8"
                },
                {
                    item : "Triple Schezwan Noodles",
                    value : "9.9"
                },
                {
                    item : "Paneer Chilly Noodles",
                    value : "9.10"
                },
                {
                    item : "Bisleri",
                    value : "10.1"
                },
                {
                    item : "Pepsi",
                    value : "10.2"
                },
                {
                    item : "Coca Cola",
                    value : "10.3"
                },
                {
                    item : "Thumbs Up",
                    value : "10.4"
                },
                {
                    item : "Slice",
                    value : "10.5"
                },
                {
                    item : "Mirinda",
                    value : "10.6"
                },
                {
                    item : "7 Up",
                    value : "10.7"
                },
                {
                    item : "Red Bull",
                    value : "10.8"
                }
                
            ]
        }
    };


    /*console.log(text.new.order_id_1.nname);
    console.log(text.processing.order_id_1.pname);
    console.log(text.recent.order_id_1.rname);*/

    function changeval(a, b) {
        if(a == "new") {
        	var order_items = text[a][b].norder_items;
        	var rows = "";

        	
            for(var i=0;i<order_items.length;i++)
            {

                var v = order_items[i]["value"];
                var quantity = '<form><input type="number" id="'+ v +'" name="demo_vertical" min=0></form>';
                var tr="<tr>";
                var state = '<form><input type="checkbox" name="my-checkbox" checked data-toggle="toggle" data-on-color="warning" data-off-color="danger"></form>';
                var td1="<td><b>"+order_items[i]["item"]+"</b></td>";
                var td2="<td>"+quantity+"</td>";
                var td3="<td>"+state+"</td></tr>";

                var rows = rows + (tr+td1+td2+td3);
            }   
            document.getElementById("nbody").innerHTML = rows; 

            
            $("[name='my-checkbox']").bootstrapSwitch();
        }
    }

    function loadItems(a, c) {

        if(c == "all") {
            var order_items = text[c].all_items;
            var rows = "";

            
            for(var i=0;i<order_items.length;i++)
            {

                var v = order_items[i]["value"];
                var quantity = '<form><input type="number" id="'+ v +'" name="demo_vertical" min=0></form>';
                var tr="<tr>";
                var state = '<form><input type="checkbox" name="my-checkbox" checked data-toggle="toggle" data-on-color="warning" data-off-color="danger"></form>';
                var td1="<td><b>"+order_items[i]["item"]+"</b></td>";
                var td2="<td>"+quantity+"</td>";
                var td3="<td>"+state+"</td></tr>";

                var rows = rows + (tr+td1+td2+td3);
            }   
            
               
            document.getElementById("ibody").innerHTML = rows; 

            
            $("[name='my-checkbox']").bootstrapSwitch();

            $('#itemTable').dataTable({
        
                // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                "language": {
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    },
                    "emptyTable": "No data available in table",
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty": "No entries found",
                    "infoFiltered": "(filtered1 from _MAX_ total entries)",
                    "lengthMenu": "_MENU_ entries",
                    "search": "Search:",
                    "zeroRecords": "No matching records found"
                    
                },


                // Or you can use remote translation file
                //"language": {
                //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                //},
                

                "columnDefs": [
                    {
                        "targets": [ 2 ],
                        "visible": true
                    }
                ],

                "order": [
                    [0, 'asc']
                ],
                
                "lengthMenu": [
                    [5, 10, 15, 20, -1],
                    [5, 10, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "pageLength": 20
            });



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

    
    $(document).ready(function(){

        loadItems("items","all");


    });



</script>

</body>

</html>