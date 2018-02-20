<?php
include("config.php");
$id=$_POST['pidd'];
$query="Select * from patient_inventory where patient_id='$id' ";
$final='';
$result=mysqli_query($db,$query);
if($result)
{
	
    while($row=mysqli_fetch_assoc($result))
         {
         	$final= $final.$row['timestamp'].",".$row['inven_id'].",".$row['Quantity']."next";
         	
         }
     echo $final;    
}
?>