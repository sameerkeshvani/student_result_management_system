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
  border: 15px solid blue;
  padding: 100px;
  margin: 20px;
}
</style>
<body>
        <!-- Responsive navbar-->
<div class="topnav">
<a>Admin</a><a href="student.php">Students</a><a href="index.php">Home</a><a class="active" href="index.php">SRMS-(Student Result Management System)</a>
</div>
<center><img src="ssrcollege.png"/></center>
<hr color="#000" />
<center>
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"osrms");
$sql = "select * from tblnotice where noticeTitle='Notice Regarding Result Declaration'";
$q = mysqli_query($conn,$sql);
if(mysqli_num_rows($q)>0)
{
$row=mysqli_fetch_assoc($q);
echo "<h2>".$row['noticeTitle']."</h2>";
$rows = $row;
echo "<div class='box'>";
echo "<h4>".$rows['noticeDetails']."</h4>";
}
?>
</div>
</center>
</head>
</html>