<?php
include("config.php");
$id=$_POST['pidd'];
$query="Select P_name,Age,Gender,Admission_date from patient where P_id='$id'";
$result=mysqli_query($db,$query);
if($result)
{
    $row=mysqli_fetch_assoc($result);
    $pn=$row['P_name'];
    $pa=$row['Age'];
    $pg=$row['Gender'];
    $doa=date("j F Y",strtotime($row['Admission_date']));
    echo $pn.",".$pa.",".$pg.",".$doa;
}
?>