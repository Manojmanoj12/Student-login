<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pro.css">
</head>
<body>
<div id="nav">
        <h1 align="center">STUDENT DETAILS</h1>
        <hr>
  
    <a href="home.html">HOME</a>
    <a href="new_stu.php">NEW STUDENT</a>
    <a href="mod_stu.php">MODIFY STUDENT</a>
    <a href="remove.php">REMOVE STUDENT</a>
    <a href="view.php">VIEW STUDENT</a>;
</div>
<center>
    <form action="">
      <br><br>STUDENT ID  : <input type="text" name="n1"><br><br>
      STUDENT NAME        : <input type="text" name="n2"><br><br>
     CONTACT NUMBER       : <input type="text" name="n3"><br><br>
     ADDRESS              : <input type="text" name="n4"><br><br>
     <button type="reset">CLEAR</button>
     <button type="sumbit">UPDATE</button>
</form>
</center>
</body>
</html>

<?php
$host="localhost";
$user="root";
$pass="";
$db="student";

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Sucess....';

$sid=$_POST['n1'];
$sname=$_POST['n2'];
$snum=$_POST['n3'];
$sadd=$_POST['n4'];

$sql="update stu_det set sid='$sid',sname='$sname',snum='$snum',sadd='$sadd'";

$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Insertion Sucessful...';
}
else
{
 echo 'Error...';
}

$conn->close();
?>