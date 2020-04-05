<?php

$Author = $_POST['Author'];
$Book_name = $_POST['Book_name'];
$Due_Date = $_POST['Due_Date'];
$Loan_ID = $_POST['Loan_ID'];
$Student_ID = $_POST['Student_ID'];

require('connect.php');
$result = $conn->query("select * from loan");

 $sql = "insert into loan values('$Author', '$Book_name', '$Due_Date', '$Loan_ID' ,'$Student_ID');";
$result = $conn->query($sql);

        header ("Location: library.php");
?>
