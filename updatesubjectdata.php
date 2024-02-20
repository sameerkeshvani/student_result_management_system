<?php
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$scode=$_POST['scode'];
if(empty($sid) || empty($sname) || empty($scode))
{
    echo "<script src='alert.js'></script>";
    include 'updatesubject.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "update iblclasses values('$sid','$sname','$scode'";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='updatesuccess.js'></script>";
    include 'updatesubject.php';
}
 ?>