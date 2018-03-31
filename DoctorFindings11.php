<!DOCTYPE html>

<html lang="en">
<?php $page_title = "Diagnosis"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
<meta charset="utf-8" />
<?php include("includes/header.php"); ?>

<!-- image upload -->

<style>
.inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.inputfile + label {
    max-width: 80%;
    font-size: 18px;
    font-weight: 700;
     color: #000000;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    padding: 10px 20px;
}

.inputfile + label svg {
    vertical-align: middle;
    margin-right: 5px;
    width: 100%;
    height: 100%;
    fill: #f1e5e6;
}

.inputfile + label figure {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #ff9900;
    display: block;
    padding: 10px;
}
</style>

<!-- image upload -->

</head>

    <?php include("includes/bodyheader.php"); ?>

    <?php include("includes/navigation.php"); ?>
    <?php include("config.php");?>
    <?php $query= "SELECT P_id from patient";
    $result = mysqli_query ($db,$query);  ?>


<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
                    
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
     
<div class="content">
            <div class="portlet light portlet-form">
                <div class="portlet-title">
                <h4 style="text-align:center;"><span class=" font-yellow-lemon sbold">
                <div style="color:#ffc107">&nbsp; Findings</div></span></h4>
                <div class="form-horizontal">
                <div class="form-group form-md-line-input" >
                    <form id="img_form" method="post" enctype="multipart/form-data">
                                <label class="col-xs-1 col-sm-1 col-md-1 control-label" style="color:black; font-size: 12px"><b>Patient id:</b>
                                    <span class="required"></span>
                                </label>
                                <div class="col-xs-4 col-sm-4 col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input list="p_id" id="pid" class="form-control" name="pid" onchange="disp();" placeholder="Enter ID">
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
                              <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="file" name="file" id="file" hidden="hidden" class="inputfile"/>
                                <label for="realFile">
                                <figure id="customBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                </svg>
                                </figure>
                                <span id="custom-text">No file Chosen</span>
                                <input class="btn primary-btn" type="submit" name="submit" value="Upload Image"/>
                              </form>
                              </div>
                            </div>
                            
                            <script>            
                        function disp() {
                        var select = document.getElementById("pid");
                        var opt = select.value;
                        document.getElementById("symptoms").value="";
                        document.getElementById("earlier_treat").value="";
                        document.getElementById("conc").value="";    
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
                        url: 'showfindings.php',
                        data: {pidd:opt},
                        cache: false,
                        success: function(d){
                        var ret=d.lastIndexOf("next");
                        var ren=d.substring(0,ret);
                        var res=ren.split("next");
                        var row="";
                        for(count=0;count<res.length;count++){
                            var respli= res[count].split(",");
                            row+='<tr><td contenteditable="true">' + respli[0] + '</td><td contenteditable="true">' + respli[1] +'</td><td contenteditable="true">' + respli[2] +'</td><td contenteditable="true">' + respli[3] +'</td></tr>';
                        }
                        $(row).appendTo("#sample_3 tbody");
                         
                        }
                    });
                    }
                    </script>
                    <div id="info">
                    <div class="row">
                            <div class="form-group form-md-line-input" >
                                <label class="col-xs-2 col-sm-1 col-md-1 control-label" style="color:black;"><b>Name:</b>
                                </label>
                                <div class="col-xs-4 col-sm-2 col-md-2">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pns" style="border:none;">
                                    </div>
                                </div>
                               
                            
                            
                                <label class="col-xs-2 col-sm-1 col-md-1 control-label" style="color:black;"><b>DOA:</b>
                                </label>
                                <div class="col-xs-4 col-sm-2 col-md-2">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pd" style="border:none;">
                                    </div>
                                </div>
                              
                                <label class="col-xs-2 col-sm-1 col-md-1 control-label" style="color:black;"><b>Age:</b>
                                </label>
                                <div class="col-xs-4 col-sm-2 col-md-2">
                                    <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pa" style="border:none;">
                                    </div>
                                </div>
                                
                            
                            
                                <label class="col-xs-2 col-sm-1 col-md-1 control-label" style="color:black;"><b>Gender:</b>
                                </label>
                                <div class="col-xs-4 col-sm-2 col-md-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" readonly id="pg" style="border:none;">
                                </div>
                                </div>
                                
                            
                        </div></div>
                </div>
            </div>
                        <!-- END VALIDATION STATES-->
        </div>
 <div class="content">
   <div class="portlet light"> 
                <div class="portlet-body">
                   
                    <!-- BEGIN FORM-->
                   <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                    <form action="#" class="form-horizontal" id="form">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide" id="fail">
                                <button class="close" data-close="alert"></button> Your form has some errors. Please check below. </div>
                            <div class="alert alert-success display-hide" id="suc">
                                <button class="close" data-close="alert"></button> Information is Updated Successfully! </div>
                            <div class="form-group form-md-line-input">
                                <div class="col-xs-6 col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-stethoscope"></i>
                                        </span>
                                    <input type="date" class="form-control" placeholder="Date" id="symptoms" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">date</span>
                                    </div>
                                </div>
                                
                            
                            
                                <div class="col-xs-6 col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-ambulance"></i>
                                        </span>
                                    <input type="time" class="form-control" placeholder="Time" id="earlier_treat" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">time</span>    
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group form-md-line-input">
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-medkit"></i>
                                        </span>
                                    <input type="textarea" class="form-control" placeholder="Clinical Notes" id="conc" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Findings made</span>    
                                    </div>
                                </div>
                                </div>
                             <div class="form-group form-md-line-input">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-medkit"></i>
                                        </span>
                                    <input type="textarea" class="form-control" placeholder="Treatment and diet advised" id="conct" required>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block">Treatment and diet advised</span>    
                                    </div>
                                </div>
                                </div>
                           
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                    <input type="submit" class="btn btn-warning" onclick="up();" value="Update Info">
                                </div>
                                
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                     <table class="table table-striped table-bordered table-hover table-header-fixed dt-responsive" width="100%" id="sample_3">
                                        <thead>
                                            <tr class="">
                                                <th class="all"> Date</th>
                                                <th class="all"> Time</th>
                                                <th class="all"> Clinical Notes </th>
                                                <th class="all"> Treatment and Diet</th>
                                            </tr>
                                        </thead>
                                        <tbody id="sample_4"></tbody>
                                    </table>
                    </div>                
                    <!-- END FORM-->
                </div>
            </div>
  
     
 </div>       
    </div>
     <script>
        function up(){
            var dt=document.getElementById("symptoms").value;
            var ti=document.getElementById("earlier_treat").value;
            var pi=document.getElementById("pid").value;
            var fi=document.getElementById("conc").value;
            var tr=document.getElementById("conct").value;
            if(dt!="" && ti!="" && fi!="" && tr!="")
                {
                  $.ajax({
                        type: 'POST',
                        url: 'updatefind.php',
                        data: {pidd:pi,datee:dt,tim:ti,Treat:tr,find:fi},
                        cache: false,
                        success: function(d){ 
                            alert(d);
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
    
<!-- upload image -->
    
<script>
const realFileBtn=document.getElementById("file");
const customFileBtn=document.getElementById("customBtn");
const customText=document.getElementById("custom-text");

customFileBtn.addEventListener("click",function(){
    realFileBtn.click();
});

realFileBtn.addEventListener("change",function(){
    if(realFileBtn.value)
    {
        customText.innerHTML=realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    }
    else
    {
        customText.innerHTML="No file Chosen";
    }
});
</script>

<script type="text/javascript">
    $(document).ready(function(e){

    $("#img_form").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'uploadimage.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(msg){
                if(msg=="ok"){
                    $('#img_form')[0].reset();
                     $("#custom-text").text('No file chosen');
                    console.log(msg);
                    alert("uploaded");
                }else{
                    console.log(msg);
                    alert("ERROR !!!");
                }
                $('#img_form').css("opacity","");
            },
            error:function(err){
                alert(err);
            },
        });
    });
    
    //file type validation
    $("#file").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            $("#custom-text").text('No file chosen');
            return false;
        }
    });
});

</script>
<!-- image upload -->

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