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
<form action="remove.php" method="POST">
STUDENT ID : <input type="text" name="v1"><br><br><br>
<button type="delete">REMOVE</button>
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

$sid=$_POST['v1'];

$sql="delete from stu_det where sid='$sid'";

$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Sucessful...';
}
else
{
 echo 'Error...';
}

$conn->close();
?>