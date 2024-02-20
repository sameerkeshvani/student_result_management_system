<?php
$id=$_POST['id'];
$cname=$_POST['cname'];
$cnamenumeric=$_POST['cnamenumeric'];
$section=$_POST["section"];
if(empty($id) || empty($cname) || empty($cnamenumeric) || empty($section))
{
    echo "<script src='alert.js'></script>";
    include 'updateclass.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "update iblclasses values('$id','$cname','$cnamenumeric','$section'";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='updatesuccess.js'></script>";
    include 'updateclass.php';
}
 ?>