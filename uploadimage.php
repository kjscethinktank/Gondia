<?php
include("config.php");
if($_POST['pid']!=NULL){

    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"]))
    {
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);

    if((($_FILES["file"]["type"]=="image/png") || ($_FILES["file"]["type"]=="image/jpg") ||   (
    	$_FILES["file"]["type"]=="image/jpeg")) && in_array($file_extension, $valid_extensions))
        {
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "uploads/".$fileName;
        }
    }
    
    $pid = $_POST['pid'];

    //include database configuration file

  $query="Insert into doctor_findings(Findings_id,p_id,picpath) values('','$pid','$targetPath')";
  $result=mysqli_query($db,$query);

  if ($result) {
  	  move_uploaded_file($sourcePath,$targetPath);
      echo "ok";
  } else {
      echo "error";
  }
  
}
else
{
  echo "select patient id.";
}

?>