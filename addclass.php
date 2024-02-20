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
<form method="POST" action="addclassdata.php">
<table border="0"/>
<b>Enter Following Details:</b></br>
<tr><td>Enter Id</td><td><input type="text" name="id"/></td></tr>
<tr></tr>
<tr><td>Enter Class Name</td><td><input type="text" name="cname"/></td></tr>
<tr></tr>
<tr><td>Enter Class Name Numeric</td><td><input type="text" name="cnamenumeric"/></td></tr>
<tr></tr>
<tr><td>Enter Section</td><td><input type="text" name="section"/></td></tr>
<tr><td></td><td><input type="submit" name="submit"/></td></tr>
</form>
</div>
</center>
</body>
</html>