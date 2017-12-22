<?php
include("config.php");
$pn=$_POST['pan'];
$pc=$_POST['pac'];
$pr=$_POST['par'];
$pt=$_POST['pat'];
$d=$_POST['doa'];
$t=$_POST['toa'];
$w=$_POST['wn'];
$a=$_POST['pa'];
$pg=$_POST['pag'];
$pidd=$_POST['pid'];
$query="Insert into patient values('$pidd','$pn','$pt','$a','$pg','$pc','$pr','$d','','$t','$w')";
$result=mysqli_query($db,$query);
if($result)
{
    echo "S";
}
?>