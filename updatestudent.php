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
<form method="POST" action="updatestudentdata.php">
<b>Enter Following Details:</b></br>
Enter Student Id</br><input type="text" name="sid"/></br>
Enter Student Name</br><input type="text" name="sname"/></br>
Enter Roll ID</br><input type="text" name="rid"/></br>
Enter Student Email ID </br><input type="text" name="seid"/></br>
Enter Student Gender</br><input type="radio" name="gender" value="m"/>Male</td><td><input type="radio" name="gender" value="f"/>Female
</br><input type="submit" name="submit"/>
</form>
</div>
</center>
</body>
</html>