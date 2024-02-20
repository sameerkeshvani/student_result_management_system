<?php
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$rid=$_POST['rid'];
$seid=$_POST['seid'];
if(empty($sid) || empty($sname) || empty($rid) || empty($seid))
{
    echo "<script src='alert.js'></script>";
    include 'addstudent.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "insert into iblclasses values('$sid','$sname','$rid','$seid'";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='addclasssuccess.js'></script>";
    include 'addstudent.php';
}
 ?>