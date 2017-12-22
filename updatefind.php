<?php
include("config.php");
$pn=$_POST['pidd'];
$dt=$_POST['datee'];
$fi=$_POST['find'];
$ti=$_POST['tim'];
$tr=$_POST['Treat'];
$query="Insert into doctor_findings  (Findings_id,p_id,Date,Time,Findings,Td) values('','$pn','$dt','$ti','$fi','$tr')";
$result=mysqli_query($db,$query);
if($result)
{
    echo "S";
}
?>