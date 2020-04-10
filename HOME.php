<?php
if(isset($_POST["AddContent"]))
{
header('location:AddContent.php');
}
?>

<?php
if(isset($_POST["AddSA"]))
{
header('location:AddSA.php');
}
?>



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
     <li class="active"><a href="#"><strong><font color=#2F4F2F><i class="fa fa-fw fa-home"></i> HOME</font></strong></a></li>
      <li><a href="BOOK INFORMATION.php"><strong><font color=#2F4F2F><i class="fa fa-fw fa-book"></i> BOOK INFORMATION</font></strong></a></li>
      <li><a href="BOOKTYPE INFORMATION.php"><strong><font color=#2F4F2F><i class="fa fa-fw fa-book"></i> BOOKTYPE INFORMATION</font></strong></a></li>
      <li><a href="SA INFORMATION.php"><strong><font color=#2F4F2F><i class="fa fa-fw fa-user"></i> SA INFORMATION </font></strong></a></li>
      <li><a href="library.php"><strong><font color=#2F4F2F><i class="fa fa-fw fa-book"></i> BOOK LOAN INFORMATION</font></strong></a></li>
      <li><a href="https://docs.google.com/document/d/11D9W7nnZJ4Ayrn1X-f0opDXH6hXw43FlCsHG3HTalyY/edit"><strong><font color=#2F4F2F><i class="fa fa-fw fa-question-circle"></i> HELP </font></strong></a></li>
      </ul> 
      
       
      <div class="text-right"> 
      <li class="search-brand"><a href="#"><strong><font color=Black></strong></font></a>
      <input type="text" placeholder="SEARCH.." name="SEARCH">
      <button type="submit"><i class="fa fa-search"></i></button></li> 
       
      <div class="btn">
      <form name ="form1" action="" method="post">
      <input type ="submit" name ="AddContent" value ="Add Content">
     </form>
      </div>

   <div class="btn">
      <form name ="form2" action="" method="post">
      <input type ="submit" name ="AddSA" value ="Add SA">
     </form>
      </div>
 
          </div>
     </form>
     </ul>
     </div>
     </nav>

 <div> </div>
<h1><center><font color="#238E68"><strong>****WELCOME TO WEBSTER UNIVESITY LIBRARY SYSTEM****</strong></font></center></h1>

<h2><center> Please select the tabs above in the naviagtion bar as per your information requirement</center></h2>

<h3><center> Thank You for using our System!!!</center></h3>
</body>

</http>
