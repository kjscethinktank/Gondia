<?php
include('config.php');



$id=$_GET['id'];
$total=0;
$grandtotal=0;
$array=array();

$query = "select * from patient where P_id='$id'";

$result = mysqli_query($db, $query);


//$sql="select i.inven_name,i.inven_cost,pi.quantity from inventory i,patient_inventory pi where i.inven_id=pi.inven_id and pi.patient_id='23se11';";


if (mysqli_num_rows($result) > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {


        $array = $row;

    }
}
$array=Json_encode($array);
echo $array;
?>
