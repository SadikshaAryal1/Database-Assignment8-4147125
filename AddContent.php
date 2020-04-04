<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 2px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 10px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2><center><font color="#238E68"><strong>******ADD NEW CONTENT TO BOOK LOAN INFORMATION******</strong></font></center></h2></h2>


<div class="container">
  <form action="library.php" method= "POST">
    <div class="row">
      <div class="col-25">
        <label for="Author">Author</label>
      </div>
      <div class="col-75">
        <input type="text" id="Author" name="Author" placeholder="Your Author name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Book_name">Book_name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Book_name" name="Book_name" placeholder="Your Book name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Due_date">Due_date</label>
      </div>
      <div class="col-75">
      <input type="Date" id="Due_Date" name="Due_Date" placeholder="Date..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Loan_ID">Loan_ID</label>
      </div>
      <div class="col-75">
        <input type="Number" id="Loan_ID" name="Loan_ID" placeholder="Loan ID..">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="Student_ID">Student_ID</label>
      </div>
      <div class="col-75">
        <input type="Number" id="Student_ID" name="Student_ID" placeholder="Student ID..">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Add">
    </div>
  </form>
</div>
</body>
</html>

