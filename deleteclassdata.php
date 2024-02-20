<?php
$id = $_POST['class'];
if(empty($id))
{
    echo "<script src='alert.js'></script>";
    include 'deleteclass.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "delete from iblclasses values('$id')";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='deletesuccess.js'></script>";
    include 'deleteoperation.php';
}
 ?>