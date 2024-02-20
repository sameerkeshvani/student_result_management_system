<html>
<style>
.box
{
    width: 500px;
    padding: 25px;
    margin: 20px;
}
.bimg
{
    background-image:url('backgroundresult.jpg');
    height: 700px;
    width: 800px;
}
</style>
<?php

//Connecting With DataBase//
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"osrms");

//Taking Values From User//
$rollno = $_POST['rno'];
$class = $_POST['class'];
if(empty($rollno==0) && $class!=0)
{
//Checking ClassName With Help Of RollNo//
$sidrn = "select * from tblstudents where RollId='$rollno'";
$qsidrn = mysqli_query($conn,$sidrn);
if(mysqli_num_rows($qsidrn)>0)
{
    while($rowsidrn=mysqli_fetch_assoc($qsidrn))
    {
        $sidrnn = $rowsidrn['ClassId'];   //Student ClassId
    }
}
$cnamenumeric = "select * from tblclasses where id='$sidrnn'";
$qcnamenumeric = mysqli_query($conn,$cnamenumeric);
if(mysqli_num_rows($qcnamenumeric)>0)
{
    while($rowcnamenumeric=mysqli_fetch_assoc($qcnamenumeric))
    {
        $cnameenumeric = $rowcnamenumeric['ClassNameNumeric'];  //Getting ClassNameNumeric
    }
}

//Checking User Provided ClassName With Actual ClassName//
$usercnumeric = "select * from tblclasses where id='$class'";
$qusercnumeric = mysqli_query($conn,$usercnumeric);
if(mysqli_num_rows($qusercnumeric)>0)
{
    while($rowusercnumeric=mysqli_fetch_assoc($qusercnumeric))
    {
        $usercnnumeric = $rowusercnumeric['ClassNameNumeric'];
    }
}

//If ClassName Is Matched With Real ClassName Execute Following Code//
if($cnameenumeric==$usercnnumeric)
{

    //College Logo Is Displayed//
    echo"<center><div class='bimg'>";
    echo "<center><img src='ssrcollege.png' height='75px' width='700px'/></center><br/>";
    echo "<center>";
    echo"<div class='box'>";

    //Getting Student Name And Class Name By Using RollNo. And DropDown List//
    $sql = "select * from tblclasses where id='$class'";
    $q = mysqli_query($conn,$sql);
    $name = "select * from tblstudents where RollId='$rollno'";
    $qname=mysqli_query($conn,$name);
    echo"<table align='center' border='0'>";
    if(mysqli_num_rows($qname)>0)
    {
        while($row=mysqli_fetch_assoc($qname))
        {
        echo "<tr><td><h3>Name:</h3></td><td><h3>".$row['StudentName']."</h3></td></tr>"; //Displaying Student Name
        }
    }
    if(mysqli_num_rows($q)>0)
    {
        while($row=mysqli_fetch_assoc($q))
        {
            echo "<tr><td><h3>Class:</h3></td><td><h3>".$row['ClassName']." ".$row['Section']."</h3></td></tr><br>";; //Displaying Subject Name
        }
    }

    //Getting SubjectId Array Through ClassName//
    $marks = "select * from tblsubjectcombination where ClassId='$class'";
    $qmarks = mysqli_query($conn,$marks);
    $subjectid=array();
    $sid=1;
    if(mysqli_num_rows($qmarks)>0)
    {
        while($rowmarks=mysqli_fetch_assoc($qmarks))
        {
            $subjectid[$sid]=$rowmarks['SubjectId'];
            $sid++;
        }
    }

    //Creating Table To Store Subjects And Marks//
    echo "<table align='center' border='0'>";
    echo "<tr><th><h3>Subjects</h3></th><th><h3>Marks</h3></th></tr>";
    //Getting StudentId Through Roll No.//
    $markss = "select * from tblstudents where RollId='$rollno'";
    $jmarkss = mysqli_query($conn,$markss);
    if(mysqli_num_rows($jmarkss)>0)
    {
        while($rowmarkss=mysqli_fetch_assoc($jmarkss))
        {
            $studentid = $rowmarkss['StudentId']."<br>";
        }
    }
    $studentidd = $studentid;

    //Creating StudentId Array To Store Marks//
    $studentid = array();
    $stdidmarks = 1;
    $stddidmarks = "select * from tblresult where StudentId='$studentidd'";
    $qstddidmarks = mysqli_query($conn,$stddidmarks);
    if(mysqli_num_rows($qstddidmarks)>0)
    {
        while($rowstddidmarks=mysqli_fetch_assoc($qstddidmarks))
        {
            $studentid[$stdidmarks] = $rowstddidmarks['marks']."<br>";
            $stdidmarks++;
        }
    }

    //End Subjects And Marks Are Displayed In Table Format//
    for($sid=1;$sid<=count($subjectid);$sid++)
    {
        $subject = "select * from tblsubjects where id='$subjectid[$sid]'";
        $qsubject = mysqli_query($conn,$subject);
        if(mysqli_num_rows($qsubject)>0)
        {
            while($rowsubject=mysqli_fetch_assoc($qsubject))
            {
                echo"<tr>";
                echo"<td><h3>".$rowsubject['SubjectName']."</h3></td>";
                echo"<td></td>";
                echo"<td><h3>".$studentid[$sid]."</h3></td>";
                echo"</tr>";
            }
        }
    }

    //Calculating And Displaying Total Marks And Percentage//
    $total = 0;
    for($sid=1;$sid<=count($subjectid);$sid++)
    {
        $total = $total + intval($studentid[$sid]);
    }
    echo"<tr><td><h3>Total Marks</h3></td><td></td><td><h3>$total</h3></td></tr>";
    $percent = $total/count($subjectid);
    echo"<tr><td><h3>Percentage</h3></td><td></td><td><h3>".$percent."%</h3></td></tr>";
}
else
{
    echo "<script src='alert.js'></script>";
    include 'student.php';
}
}
//It Is Executed When Roll No. And Class Do Not Match//
else
{
    echo "<script src='alert.js'></script>";
    include 'student.php';
}
?>