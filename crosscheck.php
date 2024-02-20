<?php
$uname = $_POST['uname'];
$psw = $_POST['psw'];
if(empty($uname) || empty($psw)==1)
{
    echo "<script src='alert.js'></script>";
    include 'adminlogin.php';
}
else
{
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"osrms");
$auname = "select * from admin";
$qauname = mysqli_query($conn,$auname);
if(mysqli_num_rows($qauname)>0)
{
    while($rowauname=mysqli_fetch_assoc($qauname))
    {
        $rauname = $rowauname['UserName'];
    }
}
$apassword = "select * from admin";
$qapassword = mysqli_query($conn,$apassword);
if(mysqli_num_rows($qapassword)>0)
{
    while($rowapassword=mysqli_fetch_assoc($qapassword))
    {
        $rapassword = $rowapassword['Password'];
    }
}
}
if($uname != $rauname || $psw != $rapassword)
{
     echo "<script src='alert.js'></script>";
     include 'adminlogin.php';
}
else
{
    include 'editdetails.php';
}
 ?>