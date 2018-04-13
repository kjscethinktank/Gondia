<?php
include('config.php');



    $id=$_GET['id'];
    $total=0;
    $grandtotal=0;
    $array=array();
    $id = $_GET['id'];
    $query = "select i.inven_name,i.inven_cost,pi.quantity from inventory i,patient_inventory pi where i.inven_id=pi.inven_id and pi.patient_id='$id'";

    $result = mysqli_query($db, $query);

//$sql="select i.inven_name,i.inven_cost,pi.quantity from inventory i,patient_inventory pi where i.inven_id=pi.inven_id and pi.patient_id='23se11';";


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            $total=0;

            if ($row['quantity'] != 0) {
                $total = (((int)$row['inven_cost'] * (int)$row['quantity']));
                $grandtotal+=$total;
//$total+=$total_cost*$total_quantity;
            }
            $row['total'] = "$total";
            $row['grandtotal']="$grandtotal";
            $array = $row;

        }
    }
    $array=Json_encode($array);
    echo $array;
?>
