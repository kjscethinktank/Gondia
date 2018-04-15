<?php
include("config.php");
$query= "Select * from doctor_findings where picpath!=''";
$final='';
$result=mysqli_query($db,$query);
if($result)
{
	
while($row=mysqli_fetch_assoc($result))
{
 $final= $final.$row['Findings_id'].",".$row['p_id'].",".$row['Date_Time'].",".$row['picpath']."next";
}
    echo $final;    
}
?>