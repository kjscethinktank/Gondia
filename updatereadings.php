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
$query="insert into daily_reading (daily_readid, p_id, pusle, bp, temp, respi, ivfluids, date _time) values('','$id','$p','$b','$t','$r','$iv','$combi')";
$result=mysqli_query($db,$query);
if($result)
{
    echo "S";
}
?>