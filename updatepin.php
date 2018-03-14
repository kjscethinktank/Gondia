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
$query3="Select Quantity from patient_inventory where patient_id='$id' and inven_id='$inid'";
$result3=mysqli_query($db,$query3);
$chk=mysqli_num_rows($result3);
if($chk!=0)
{
    $row3=mysqli_fetch_assoc($result3);
    $inq=$row3['Quantity'];
    $inq=$inq+$q;
    $query4="update patient_inventory set Quantity='$inq' where patient_id='$id' and inven_id='$inid'";
    $result4=mysqli_query($db,$query4);
    $query2="update inventory set available='$avail' where inven_id='$inid'";
    $result2=mysqli_query($db,$query2);
    if($result4)
    {
    echo "S";
    }
}
else{
    $query2="update inventory set available='$avail' where inven_id='$inid'";
    $result2=mysqli_query($db,$query2);
    $query="insert into patient_inventory values('$id','$inid','$q',NOW())";
    $result=mysqli_query($db,$query);
    if($result)
    {
    echo "S";
    }
}
?>