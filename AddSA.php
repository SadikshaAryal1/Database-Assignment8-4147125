<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 2px;
  resize: vertical;
}

label {
  padding: 14px 14px 14px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 14px;
  background-color: #f2f2f2;
  padding: 70px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 8px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 8px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 500px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
</style>
</head>
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
      </div>
     </nav>

<h2><center><font color="#238E68"><strong>******ADD NEW SA INFORMATION******</strong></font></center></h2></h2>


<div class="container">
  <form action="library.php" method= "POST">

    <div class="row">
      <div class="col-25">
        <label for="Name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Name" name="Name" placeholder="Name....">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Student_ID">Student_ID</label>
      </div>
      <div class="col-75">
        <input type="Number" id="Student_ID" name="Student_ID" placeholder="Student ID....">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Date_Hired">Date_Hired</label>
      </div>
      <div class="col-75">
      <input type="Date" id="Date_Hired" name="Date_Hired" placeholder="Date....">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Monthly_Salary">Monthly_Salary</label>
      </div>
      <div class="col-75">
        <input type="Number" id="Monthly_Salary" name="Monthly_Salary" placeholder="Monthly Salary....">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="Working_Schedule">Working_Schedule</label>
      </div>
      <div class="col-75">
        <input type="Date" id="Working_Schedule" name="Working_Schedule" placeholder="Working Schedule....">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Add">
    </div>
  </form>
</div>
</body>
</html>

