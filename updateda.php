<?php
include("config.php");
$id=$_POST['pidd'];
$s=$_POST['sym'];
$e=$_POST['ear'];
$c=$_POST['conc'];
$query="Update daignosis set symptoms='$s',earlier_treat='$e',conc='$c' where P_id='$id'";
$result=mysqli_query($db,$query);
if($result)
{
    echo "S";
}
?>