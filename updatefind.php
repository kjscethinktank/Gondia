<?php
include("config.php");
$pn=$_POST['pidd'];
$dt=$_POST['datee'];
$fi=$_POST['find'];
$ti=$_POST['tim'];
$tr=$_POST['Treat'];
$combi = date('Y-m-d H:i:s', strtotime("$dt $ti"));
$query="Insert into doctor_findings  (Findings_id,p_id,Date_Time,Findings,Td,flag) values('','$pn','$combi','$fi','$tr','1')";
$result=mysqli_query($db,$query);
if($result)
{
    echo "S";
}
?>