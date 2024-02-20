<html>
<head>
<title>Student Result Management System</title>
</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: blue;
  color: white;
}
.box {
  background-color: lightgrey;
  width: 300px;
  border: 10px solid blue;
  padding: 50px;
  margin: 20px;
}
</style>
<body>
<!-- Responsive navbar-->
<div class="topnav">
<a href="adminlogin.php">Admin</a><a href="student.php">Students</a><a href="index.php">Home</a><a class="active" href="index.php">SRMS-(Student Result Management System)</a>
</div>
<center><img src="ssrcollege.png"/></center><br/>
<hr color="#000" />
<center><h2>Kindly Fill Your Details</h2>
<div class="box">
<form method="POST" action="result.php">
<table border="0">
<tr><td><font>Enter Your Roll No.</font></td><td><input type="number" name="rno"/></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><label for="class"/><font>Select Your Class</font></td><td><select name="class"><option value="0"/>Select Class</option>
</form>
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"osrms");
$sql = "select ClassName, Section from tblclasses";
$q = mysqli_query($conn,$sql);
$i=1;
if(mysqli_num_rows($q)>0)
{
while($row=mysqli_fetch_assoc($q))
{
if($i<=2)
{
echo "<option value='$i'>".$row['ClassName']." ".$row['Section'];
$i++;
}
elseif($i==3)
{
$i=4;
echo "<option value='$i'>".$row['ClassName']." ".$row['Section'];
$i++;
}
else
{
echo "<option value='$i'>".$row['ClassName']." ".$row['Section'];
$i++;
}
}
}
?>
<tr><td></td><td></tr>
<tr><td></td><td><input type="submit" value="Show Result"/></td></tr>
</div>
</center>