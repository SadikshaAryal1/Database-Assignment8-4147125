<?php

$Name = $_POST['Name'];
$Student_ID = $_POST['Student_ID'];
$Date_Hired = $_POST['Date_Hired'];
$Monthly_Salary = $_POST['Monthly_Salary'];
$Working_Schedule = $_POST['Working_Schedule'];


require('connect.php');
$result = $conn->query("select * from SA");

 $sql = "insert into SA values('$Name', '$Student_ID', '$Date_Hired', '$Monthly_Salary' ,'$Working_Schedule');";
$result = $conn->query($sql);

        header ("Location: SA INFORMATION.php");
?>
