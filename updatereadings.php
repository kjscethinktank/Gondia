<?php
include("config.php");
$id=$_POST['pidd'];
$t=$_POST['tem'];
$ti=$_POST['tim'];
$da=$_POST['datee'];
$p=$_POST['pul'];
$b=$_POST['bp'];
$r=$_POST['resp'];
$iv=$_POST['ivf'];
$combi = date('Y-m-d H:i:s', strtotime("$da $ti"));
$query="insert into daily_reading values('','$id','$p','$b','$t','$r','$iv','$combi','','1')";
$result=mysqli_query($db,$query);
if($result)
{
    echo "ok";
}
else
{
	echo "error";
}
?>