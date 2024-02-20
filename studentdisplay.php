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
.bimg
{
    background-image:url('bgssrcollege.jpg');
    height: 700px;
    width: 600px;
}
.box {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid blue;
  padding: 150px;
  margin: 20px;
}
</style>
<body>
<!-- Responsive navbar-->
<div class="topnav">
<a href="adminlogin.php">Admin</a><a href="student.php">Students</a><a href="index.php">Home</a><a class="active" href="index.php">SRMS-(Student Result Management System)</a>
</div>
<center><img src="ssrcollege.png"/><br/>
<hr color="#000" />
<div class="box">
<form method="POST" action="index.php">
Select Your Class   <select name="class"><option value="0"/>Select Class</option>
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
            echo "<option value='$i'>".$row['ClassName']." ".$row['Section']."</option>";
            $i++;
        }
        elseif($i==3)
        {
            $i=4;
            echo "<option value='$i'>".$row['ClassName']." ".$row['Section']."</option>";
            $i++;
        }
        else
        {
            echo "<option value='$i'>".$row['ClassName']." ".$row['Section']."</option>";
            $i++;
        }
    }
}
$cid = $_POST['class'];
echo $cid;
?>
<input type="submit" value="Show Student List"/>
</body>
</html>