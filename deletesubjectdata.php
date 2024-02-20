<?php
$sid=$_POST['sid'];
if(empty($sid))
{
    echo "<script src='alert.js'></script>";
    include 'deletesubject.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "delete from iblclasses values('$sid')";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='deletesuccess.js'></script>";
    include 'deleteoperation.php';
}
 ?>