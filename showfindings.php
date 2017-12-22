<?php
include("config.php");
$id=$_POST['pidd'];
$query="Select * from doctor_findings where p_id='$id' ";
$final='';
$result=mysqli_query($db,$query);
if($result)
{
	
    while($row=mysqli_fetch_assoc($result))
         {
         	$final= $final.$row['Date'].",".$row['Time'].",".$row['Findings'].",".$row['Td']."next";
         	
         }
     echo $final;    
}
?>