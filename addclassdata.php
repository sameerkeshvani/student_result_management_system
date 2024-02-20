<?php
$id=$_POST['id'];
$cname=$_POST['cname'];
$cnamenumeric=$_POST['cnamenumeric'];
$section=$_POST["section"];
if(empty($id) || empty($cname) || empty($cnamenumeric) || empty($section))
{
    echo "<script src='alert.js'></script>";
    include 'addclass.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "insert into iblclasses values('$id','$cname','$cnamenumeric','$section'";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='addclasssuccess.js'></script>";
    include 'addclass.php';
}
 ?>