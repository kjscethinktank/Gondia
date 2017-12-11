<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Add inventory"; ?>
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

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light  ">
                                <div class="portlet-title">
                                    <h2 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                                    <div style="color:#ffc107">&nbsp; ADD INVENTORY</div></span></h2>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button id="sample_editable_1_new" class="btn yellow-crusta"> Add New 
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn" style="float: right; padding-right: 0;">
                                                <a class="btn btn-default" href="javascript:;" data-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-share"></i>
                                                <span class="hidden-xs"> Tools </span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-backdrop"></div>
                                                <ul class="dropdown-menu pull-right" id="sample_editable_1_tools">
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
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1" width="100%" >
                                        <thead>
                                            <tr>
                                                <th> Date </th>
                                                <th> Item </th>
                                                <th> Rate (Rs.) </th>
                                                <th> Quantity </th>
                                                <th> Subtotal </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td class="center"> </td>
                                                <td>
                                                    <a class="edit" href="javascript:;"> Edit </a>
                                                </td>
                                                <td>
                                                    <a class="delete" href="javascript:;"> Delete </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5"></div>
                                            <div class="col-xs-1 col-sm-1 col-md-1">
                                                <button type="submit" class="btn" style="background-color:#ffc107;color:white;">Submit details</button>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php include("includes/footer.php"); ?>
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <script type="text/javascript">
            function restoreRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);

                for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                    oTable.fnUpdate(aData[i], nRow, i, false);
                }

                oTable.fnDraw();
            }

            function editRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);
                jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '" placeholder="mm/dd/yyyy">';
                jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '" autocomplete="on">';
                jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
                jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
                jqTds[4].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[4] + '">';
                jqTds[5].innerHTML = '<a class="edit" href="">Save</a>';
                jqTds[6].innerHTML = '<a class="cancel" href="">Cancel</a>';
            }

            function saveRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 5, false);
                oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 6, false);
                oTable.fnDraw();
            }

            function cancelEditRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 5, false);
                oTable.fnDraw();
            }

            var table = $('#sample_editable_1');

            var oTable = table.dataTable({

                // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
                // So when dropdowns used the scrollable div should be removed. 
                //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

                "lengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],

                // Or you can use remote translation file
                //"language": {
                //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                //},

                // set the initial value
                "pageLength": 10,

                "language": {
                    "lengthMenu": " _MENU_ records"
                },
                "columnDefs": [{ // set default column settings
                    'orderable': true,
                    'targets': [0]
                }, {
                    "searchable": true,
                    "targets": [0]
                }],
                buttons: [
                    { extend: 'print', className: 'btn dark btn-outline' },
                    { extend: 'copy', className: 'btn red btn-outline' },
                    { extend: 'pdf', className: 'btn green btn-outline' },
                    { extend: 'excel', className: 'btn yellow btn-outline ' },
                    { extend: 'csv', className: 'btn purple btn-outline ' },
                    { extend: 'colvis', className: 'btn dark btn-outline', text: 'Columns'}
                ],
                "order": [
                    [0, "asc"]
                ] // set first column as a default sort by asc
            });

            // handle datatable custom tools
            $('#sample_editable_1_tools > li > a.tool-action').on('click', function() {
                var action = $(this).attr('data-action');
                oTable.api().button(action).trigger();
            });

            var tableWrapper = $("#sample_editable_1_wrapper");

            var nEditing = null;
            var nNew = false;

            $('#sample_editable_1_new').click(function (e) {
                e.preventDefault();

                if (nNew && nEditing) {
                    if (confirm("Previous row not saved. Do you want to save it ?")) {
                        saveRow(oTable, nEditing); // save
                        $(nEditing).find("td:first").html("Untitled");
                        nEditing = null;
                        nNew = false;

                    } else {
                        oTable.fnDeleteRow(nEditing); // cancel
                        nEditing = null;
                        nNew = false;
                        
                        return;
                    }
                }

                var aiNew = oTable.fnAddData(['', '', '', '', '', '', '']);
                var nRow = oTable.fnGetNodes(aiNew[0]);
                editRow(oTable, nRow);
                nEditing = nRow;
                nNew = true;
            });

            table.on('click', '.delete', function (e) {
                e.preventDefault();

                if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }

                var nRow = $(this).parents('tr')[0];
                oTable.fnDeleteRow(nRow);
                alert("Deleted! Do not forget to do some ajax to sync with backend :)");
            });

            table.on('click', '.cancel', function (e) {
                e.preventDefault();
                if (nNew) {
                    oTable.fnDeleteRow(nEditing);
                    nEditing = null;
                    nNew = false;
                } else {
                    restoreRow(oTable, nEditing);
                    nEditing = null;
                }
            });

            table.on('click', '.edit', function (e) {
                e.preventDefault();
                nNew = false;
                
                /* Get the row as a parent of the link that was clicked on */
                var nRow = $(this).parents('tr')[0];

                if (nEditing !== null && nEditing != nRow) {
                    /* Currently editing - but not this row - restore the old before continuing to edit mode */
                    restoreRow(oTable, nEditing);
                    editRow(oTable, nRow);
                    nEditing = nRow;
                } else if (nEditing == nRow && this.innerHTML == "Save") {
                    /* Editing this row and want to save it */
                    saveRow(oTable, nEditing);
                    nEditing = null;
                    alert("Updated! Do not forget to do some ajax to sync with backend :)");
                } else {
                    /* No edit in progress - let's start one */
                    editRow(oTable, nRow);
                    nEditing = nRow;
                }
            });
    
        </script>
        
    </body>

</html>