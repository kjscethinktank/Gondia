<?php
include("config.php");
$id=$_POST['pidd'];
$q=$_POST['qaun'];
$name=$_POST['nam'];
$query1="select inven_id,available from inventory where inven_name='$name'";
$result1=mysqli_query($db,$query1);
$row=mysqli_fetch_assoc($result1);
$inid=$row['inven_id'];
$avail=$row['available'];
$avail=$avail-$q;
$query2="update inventory set available='$avail' where inven_id='$inid'";
$result2=mysqli_query($db,$query2);
$query="insert into patient_inventory values('$id','$inid','$q',NOW())";
$result=mysqli_query($db,$query);
if($result)
{
    echo "S";
}
?>