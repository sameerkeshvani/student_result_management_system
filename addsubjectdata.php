<?php
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$scode=$_POST['scode'];
if(empty($sid) || empty($sname) || empty($scode))
{
    echo "<script src='alert.js'></script>";
    include 'addsubject.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "insert into iblclasses values('$sid','$sname','$scode'";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='addclasssuccess.js'></script>";
    include 'addsubject.php';
}
 ?>