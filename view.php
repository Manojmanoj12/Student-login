<?php
$host="localhost";
$user="root";
$pass="";
$db="student";

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Sucess....';

$sql="select * from stu_det";
$res=$conn->query($sql);
if($res->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$res->fetch_assoc())
    {
        echo '<tr>';
        echo '<td>'.$row['sid']."</td>";
        echo '<td>'.$row['sname']."</td>";
        echo '<td>'.$row['snum']."</td>";
        echo '<td>'.$row['sadd']."</td>";
        echo '</tr>';
    }
    echo "</table>"; 
}
else
{
 echo 'Record is Empty...';
}
$conn->close();
?>