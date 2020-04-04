<http>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
table, th, td {
  border: 2px solid black;
  border-spacing: 2px;
  }
  th, td {
  padding: 10px;
}
table{
  width:90%;    
  background-color: #F4F6F6;
  
}
table {
  border-spacing: 2px;
}
  
.btn button {
  background-color: #e7e7e7; 
  border: 1px solid #4CAF50;; 
  color: black; 
  padding: 10px 24px; 
  cursor: pointer; 
  width: 100%; 
  display: block;
  text:align: center;
}

.btn button:not(:last-child) {
  border-bottom: none; 
}

.btn button:hover {
  background-color: #3e8e41;
}
  
</style>

<body>


<nav class="navbar navbar-default">
  <div class="container-white">
    <div class="navbar-header">
 
      <a class="navbar-brand" href="#"><strong><font color=Black><i class="fa fa-fw fa-university"></i> WEBSTER LIBRARY:</strong></font></a>
    </div>
    <ul class="nav navbar-nav">
     <li><a href="#"><strong><font color=#2F4F2F><i class="fa fa-fw fa-home"></i> HOME</font></strong></a></li>
      <li><a href="#"><strong><font color=#2F4F2F><i class="fa fa-fw fa-book"></i> BOOK INFORMATION</font></strong></a></li>
      <li><a href="#"><strong><font color=#2F4F2F><i class="fa fa-fw fa-book"></i> BOOKTYPE INFORMATION</font></strong></a></li>
      <li><a href="#"><strong><font color=#2F4F2F><i class="fa fa-fw fa-user"></i> SA INFORMATION</font></strong></a></li>
      <li class="active"><a href="#"><strong><font color=#2F4F2F><i class="fa fa-fw fa-book"></i> BOOK LOAN INFORMATION</font></strong></a></li>
      <li><a href="https://docs.google.com/document/d/11D9W7nnZJ4Ayrn1X-f0opDXH6hXw43FlCsHG3HTalyY/edit"><strong><font color=#2F4F2F><i class="fa fa-fw fa-question-circle"></i> HELP </font></strong></a></li>
      </ul> 
      
       
      <div class="text-right"> 
      <li class="search-brand"><a href="#"><strong><font color=Black></strong></font></a>
      <input type="text" placeholder="SEARCH.." name="SEARCH">
      <button type="submit"><i class="fa fa-search"></i></button></li> 
       
        <div class="btn">
      <button>Add Content</button>
      </div>
 
          </div>
     </form>
     </ul>
     </div>
     </nav>

<h2><center><font color="#238E68"><strong>****BOOK LOAN INFORMATION****</strong></font></center></h2>

<?php
require('connect.php');
$result = $conn->query("select * from loan");
?>

<table border="2" align="center">
<tr>
  <td><strong><font color=navy><u>Author</strong></u></font></td>
  <td><strong><font color=navy><u>Book_name</strong></u></font></td>
  <td><strong><font color=navy><u>Due_Date</strong></u></font></td>
  <td><strong><font color=navy><u>Loan_ID</strong></u></font></td>
  <td><strong><font color=navy><u>Student_ID</strong></u></font></td>
</tr>


<?php
$sql = "SELECT * from loan";
$result = $conn->query($sql);
$return_arr = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
"<tr>
    <td>{$row['Author']}</td>
    <td>{$row['Book_name']}</td>
    <td>{$row['Due_Date']}</td>
    <td>{$row['Loan_ID']}</td>
    <td>{$row['Student_ID']}</td>
</tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>

</http>
