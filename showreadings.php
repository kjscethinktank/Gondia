<?php
include("config.php");
$id=$_POST['pidd'];
$query="Select * from daily_reading where p_id='$id' ";
$final='';
$result=mysqli_query($db,$query);
if($result)
{
	
    while($row=mysqli_fetch_assoc($result))
         {
         	$final= $final.$row['date-time'].",".$row['pusle'].",".$row['bp'].",".$row['temp'].",".$row['respi'].",".$row['ivfluids']."next";
         	
         }
     echo $final;    
}
?>