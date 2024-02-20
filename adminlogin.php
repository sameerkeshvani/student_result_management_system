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
  width: 600px;
  border: 15px solid blue;
  padding: 1px;
  margin: 20px;
}
.imgcontainer {
  text-align: center;
  width: 50px;
  padding: 50px;
}
</style>
</head>
<body>
<!-- Responsive navbar-->
<div class="topnav">
<a href="adminlogin.php">Admin</a><a href="student.php">Students</a><a href="index.php">Home</a><a class="active" href="index.php">SRMS-(Student Result Management System)</a>
</div>
<center><img src="ssrcollege.png"/></center><br/>
<hr color="#000" />
<center>
<div class="box">
<table align="center" border="0">
<h3 align="center">Login Form</h3>
<form action="crosscheck.php" method="post">
<tr><td></td><td><img src="img_avatar2.png" height="100" width="100"></td></tr>
</table>
<br/>
<table align="center" border="0">
<tr><td>Username</td><td><input type="text" name="uname"></td></tr>
<tr><td>Password</td><td><input type="password" name="psw"></td></tr>
</table>
<br/>
<table align="center" border="0">
<tr><td><a href="forgotpassword.php">Forgot Password?</a></td><td></td><td><input type="submit" value="Login"></td></tr>
</div>
</form>
</body>
</html>
