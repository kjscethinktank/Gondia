<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Past Inventory"; ?>

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
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                    <!--<h3 class="page-title"> Past Orders
                        <small>Browse the history</small>
                    </h3>
                
                    <!-- END PAGE HEADER-->
                    
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
                                        <thead>
                                            <tr class="">
                                                <th class="all"> Date</th>
                                                <th class="all"> Inventory code </th>
                                                <th class="all"> Equipment </th>
                                                <th class="all"> Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody id="inventorybody">
                                            <tr>
                                            <td>9/11/17</td>
                                            <td>1</td>
                                            <td>Oxygen</td>
                                            <td>20</td>    
                                            </tr>
                                            <tr>
                                            <td>3/11/17</td>
                                            <td>2</td>
                                            <td>Monitor</td>
                                            <td>10</td>    
                                            </tr>
                                            <tr>
                                            <td>30/10/17</td>
                                            <td>3</td>
                                            <td>Sterilizers</td>
                                            <td>30</td>    
                                            </tr>
                                            <tr>
                                            <td>30/10/17</td>
                                            <td>4</td>
                                            <td>Syringes</td>
                                            <td>100</td>    
                                            </tr>
                                            <tr>
                                            <td>30/10/17</td>
                                            <td>5</td>
                                            <td>Defibrillators</td>
                                            <td>10</td>    
                                            </tr>
                                            <tr>
                                            <td>30/10/17</td>
                                            <td>6</td>
                                            <td>Disposable Gloves</td>
                                            <td>100</td>
                                            </tr>
                                            <tr>
                                            <td>31/10/17</td>
                                            <td>7</td>
                                            <td>Sundries</td>
                                            <td>100</td>    
                                            </tr>
                                            <tr>
                                            <td>31/10/17</td>
                                            <td>9</td>
                                            <td>Hypodermic Needles</td>
                                            <td>50</td>    
                                            </tr>
                                            <tr>
                                            <td>31/10/17</td>
                                            <td>10</td>
                                            <td>Orthopaedic Supports</td>
                                            <td>100</td>    
                                            </tr>
                                            <!-- Insert content using JSON objects -->
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
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- DATEPICKER-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/daterangefilter.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <!--script>

            var inventory = {

                "inventory_1" : {

                    "ndata" : [
                    {
                    "date" : "06/07/2016",
                    "inventorycode" : "1",
                    "item" : "Onion",
                    "rate" : "18",
                    "quantity" :  "5",
                    "subtotal" :  "90"
                    },
                    {
                    "date" : "06/07/2016",
                    "inventorycode" : "1",
                    "item" : "Processed cheese",
                    "rate" : "357",
                    "quantity" :  "2",
                    "subtotal" :  "714"
                    },
                    {
                    "date" : "06/07/2016",
                    "inventorycode" : "1",
                    "item" : "Hakka Noodles",
                    "rate" : "60",
                    "quantity" :  "5",
                    "subtotal" :  "300"
                    },
                    {
                    "date" : "06/07/2016",
                    "inventorycode" : "1",
                    "item" : "Tomato",
                    "rate" : "78",
                    "quantity" :  "10",
                    "subtotal" :  "780"
                    },
                    {
                    "date" : "06/07/2016",
                    "inventorycode" : "1",
                    "item" : "Maggi",
                    "rate" : "89",
                    "quantity" :  "10",
                    "subtotal" :  "890"
                    }
                    ]

                },

                "inventory_2" : {

                    "ndata" : [
                    {
                    "date" : "06/10/2016",
                    "inventorycode" : "2",
                    "item" : "Tomato Sauce",
                    "rate" : "96",
                    "quantity" :  "1",
                    "subtotal" :  "96"
                    },
                    {
                    "date" : "06/10/2016",
                    "inventorycode" : "2",
                    "item" : "Potato",
                    "rate" : "31",
                    "quantity" :  "5",
                    "subtotal" :  "155"
                    },
                    {
                    "date" : "06/10/2016",
                    "inventorycode" : "2",
                    "item" : "Onion",
                    "rate" : "18",
                    "quantity" :  "5",
                    "subtotal" :  "90"
                    },
                    {
                    "date" : "06/10/2016",
                    "inventorycode" : "2",
                    "item" : "Paneer",
                    "rate" : "55",
                    "quantity" :  "10",
                    "subtotal" :  "550"
                    },
                    {
                    "date" : "06/10/2016",
                    "inventorycode" : "2",
                    "item" : "Maggi",
                    "rate" : "89",
                    "quantity" :  "5",
                    "subtotal" :  "445"
                    }
                    ]

                },
                
                "inventory_3" : {

                    "ndata" : [
                    {
                    "date" : "06/16/2016",
                    "inventorycode" : "3",
                    "item" : "Green Capsicum",
                    "rate" : "19",
                    "quantity" :  "2",
                    "subtotal" :  "38"
                    },
                    {
                    "date" : "06/16/2016",
                    "inventorycode" : "3",
                    "item" : "Cabbage",
                    "rate" : "34",
                    "quantity" :  "1",
                    "subtotal" :  "34"
                    },
                    {
                    "date" : "06/16/2016",
                    "inventorycode" : "3",
                    "item" : "Maggi",
                    "rate" : "89",
                    "quantity" :  "5",
                    "subtotal" :  "445"
                    },
                    {
                    "date" : "06/16/2016",
                    "inventorycode" : "3",
                    "item" : "Mushrooms",
                    "rate" : "54",
                    "quantity" :  "5",
                    "subtotal" :  "270"
                    },
                    {
                    "date" : "06/16/2016",
                    "inventorycode" : "3",
                    "item" : "Tomato",
                    "rate" : "78",
                    "quantity" :  "10",
                    "subtotal" :  "780"
                    }
                    ]

                },

                "inventory_4" : {

                    "ndata" : [
                    {
                    "date" : "06/17/2016",
                    "inventorycode" : "4",
                    "item" : "Corn",
                    "rate" : "19",
                    "quantity" :  "5",
                    "subtotal" :  "95"
                    },
                    {
                    "date" : "06/17/2016",
                    "inventorycode" : "4",
                    "item" : "Hakka Noodles",
                    "rate" : "60",
                    "quantity" :  "5",
                    "subtotal" :  "300"
                    },
                    {
                    "date" : "06/17/2016",
                    "inventorycode" : "4",
                    "item" : "Mozzarella Cheese",
                    "rate" : "480",
                    "quantity" :  "1",
                    "subtotal" :  "480"
                    },
                    {
                    "date" : "06/17/2016",
                    "inventorycode" : "4",
                    "item" : "Onion",
                    "rate" : "18",
                    "quantity" :  "5",
                    "subtotal" :  "90"
                    },
                    {
                    "date" : "06/17/2016",
                    "inventorycode" : "4",
                    "item" : "Coca Cola",
                    "rate" : "37",
                    "quantity" :  "10",
                    "subtotal" :  "370"
                    }
                    ]

                }

            }

            function loadtab(a) {
                // Javascript to enable link to tab
                if (a) {
                    //console.log(a);
                    $('.nav-tabs a[id='+a+']').tab('show');
                }
            }



            var table = $('#sample_3');
            var fixedHeaderOffset = 0;
            if (App.getViewPort().width < App.getResponsiveBreakpoint('md')) {
                if ($('.page-header').hasClass('page-header-fixed-mobile')) {
                    fixedHeaderOffset = $('.page-header').outerHeight(true);
                } 
            } else if ($('.page-header').hasClass('navbar-fixed-top')) {
                fixedHeaderOffset = $('.page-header').outerHeight(true);
            }

            function format (d) {

                // To assign appropriate value 
                var no_inventory_items = d;
                var val = parseInt(no_inventory_items)+1;

                var inventory_items = inventory['inventory_'+val+''].ndata;
                console.log('inventory_'+val+'');
                var table_data = '<table class="ui table" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                    '<tr>'+
                        '<th>Item</th>'+'<th>Rate</th>'+'<th>Quantity</th>'+'<th>Subtotal</th>'+
                    '</tr>';
                for(var i=0;i<inventory_items.length;i++)
                {
                    var temp = '<tr>'+
                        '<td>'+inventory_items[i]["item"]+'</td>'+
                        '<td>'+inventory_items[i]["rate"]+'</td>'+
                        '<td>'+inventory_items[i]["quantity"]+'</td>'+
                        '<td>'+inventory_items[i]["subtotal"]+'</td>'+
                    '</tr>';
                    var table_data = table_data + temp;
                }

                var childtable = table_data + '</table>';

                $( "div[id=child_"+val+"]").html(childtable);
            }



            function loadInventory() {
                console.log("Inside loadInventory");
               
                var inventory_count = Object.keys(inventory).length;
                var rows = "";
                
                for(var i=1;i<=inventory_count;i++)
                {
                    // Calculate total cost of inventory
                    var total_cost = 0;
                    var no_of_items = inventory['inventory_'+i+''].ndata.length;
                    for(j=0; j< no_of_items; j++){
                        total_cost = total_cost + parseInt(inventory['inventory_'+i+''].ndata[j].subtotal);
                    }

                    var content = inventory['inventory_'+i+''].ndata[0];
                    var tr="<tr>";
                    var td1="<td>"+content.date+"</td>";
                    var td2="<td>"+content.inventorycode+"</td>";
                    var td3="<td>"+total_cost+"</td>";
                    var td4="<td><div id='child_"+i+"'></div></td></tr>";

                    var rows = rows + (tr+td1+td2+td3+td4);
                }   
                
                document.getElementById("inventorybody").innerHTML = rows; 

                initTable();
            }

            function initTable(){

                // Initialize Datatable
                var oTable = table.dataTable({

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
                        "zeroRecords": "No matching records found",
                        "decimal": "."
                    },

                    // CREATE CHILD TABLE FOR ROWS
                    "createdRow": function format1 () {

                        // To assign appropriate value 
                        var no_inventory_items = $("input[name=no_of_inventory_items]").val();
                        var val = parseInt(no_inventory_items)+1;
                        $("input[name=no_of_inventory_items]").val(parseInt(no_inventory_items)+1);

                        var inventory_items = inventory['inventory_'+val+''].ndata;
                        console.log('inventory_'+val+'');
                        var table_data = '<table class="ui table" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                            '<tr>'+
                                '<th>Item</th>'+'<th>Rate</th>'+'<th>Quantity</th>'+'<th>Subtotal</th>'+
                            '</tr>';
                        for(var i=0;i<inventory_items.length;i++)
                        {
                            var temp = '<tr>'+
                                '<td>'+inventory_items[i]["item"]+'</td>'+
                                '<td>'+inventory_items[i]["rate"]+'</td>'+
                                '<td>'+inventory_items[i]["quantity"]+'</td>'+
                                '<td>'+inventory_items[i]["subtotal"]+'</td>'+
                            '</tr>';
                            var table_data = table_data + temp;
                        }

                        var childtable = table_data + '</table>';

                        $( "div[id=child_"+val+"]").html(childtable);
                    },


                    // Or you can use remote translation file
                    //"language": {
                    //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                    //},

                    // setup rowreorder extension: http://datatables.net/extensions/fixedheader/
                    fixedHeader: {
                        header: true,
                        headerOffset: fixedHeaderOffset
                    },

                    buttons: [
                        { extend: 'print', className: 'btn dark btn-outline' },
                        { extend: 'copy', className: 'btn red btn-outline' },
                        { extend: 'pdf', className: 'btn green btn-outline' },
                        { extend: 'excel', className: 'btn yellow btn-outline ' },
                        { extend: 'csv', className: 'btn purple btn-outline ' },
                        { extend: 'colvis', className: 'btn dark btn-outline', text: 'Columns'}
                    ],

                    "order": [
                        [0, 'asc']
                    ],
                    
                    "lengthMenu": [
                        [5, 10, 15, 20, -1],
                        [5, 10, 15, 20, "All"] // change per page values here
                    ],
                    // set the initial value
                    "pageLength": 20,
                    // setup responsive extension: http://datatables.net/extensions/responsive/
                    responsive: {
                        details: {
                            //  renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                            //     tableClass: 'ui table'
                            // } )
                        }
                    }
                
                    
                    // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
                    // So when dropdowns used the scrollable div should be removed. 
                    //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                });

                // handle datatable custom tools
                $('#sample_3_tools > li > a.tool-action').on('click', function() {
                    var action = $(this).attr('data-action');
                    oTable.api().button(action).trigger();
                });


                /* Add event listeners to the two date-range filtering inputs */
                $('#min').change( function() { oTable.fnDraw(); } );
                $('#max').change( function() { oTable.fnDraw(); } );

                oTable.api().on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
                    console.log( 'Details for row '+row.index()+' '+(showHide ? 'shown' : 'hidden') );
                    format(row.index());
                } );
                    
            }


            $('#today').on('click', function () {

                $(function() {
                    $( "#min" ).datepicker();
                    $('#min').datepicker('setDate', 'today');
                });


                $(function() {
                    $( "#max" ).datepicker();
                    $('#max').datepicker('setDate', 'today');
                });

            });

            $('#days').on('click', function () {

                $(function() {
                    $( "#max" ).datepicker();
                    $('#max').datepicker('setDate', 'today');
                });

                $(function() {

                    var date = new Date();
                    var dd = date.getDate();
                    var mm = date.getMonth();
                    var yyyy = date.getFullYear();
                    if(dd < 8){
                        dd = dd + 30 - 7;
                    }
                    else{
                        dd = dd - 7;
                        mm = mm + 1;
                    }

                    var ToDate = mm + '/' + dd + '/' + yyyy;
                    $('#min').datepicker('setDate', ToDate);

                });

            });


            $('#month').on('click', function () {

                $(function() {
                    $( "#max" ).datepicker();
                    $('#max').datepicker('setDate', 'today');
                });

                $(function() {

                    var date = new Date();
                    var dd = date.getDate();   
                    var mm = date.getMonth();
                    var yyyy = date.getFullYear();
                    
                    if(mm < 1){
                        mm = 11;
                    }
          
                    var ToDate = mm + '/' + dd + '/' + yyyy;
               
                    $('#min').datepicker('setDate', ToDate);

                });

            });



             
            $(document).ready(function() {

                loadInventory();
                //setTimeout("format('inventory_1')", 2000); ;
            } );

        </script-->
    </body>
</html>