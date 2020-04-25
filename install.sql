 CREATE TABLE Book
(
  Borrowed_Date VARCHAR(400) NOT NULL,
  Due_Date VARCHAR(400) NOT NULL,
  Returned_Date VARCHAR(400) NOT NULL,
  Purchase_Date VARCHAR(400) NOT NULL,
  Book_name VARCHAR(400) NOT NULL,
ISBN_Number INT NOT NULL,
PRIMARY KEY (ISBN_Number)
);
CREATE TABLE Book_Type
(
  ISBN_Number INT NOT NULL,
  Book_Name VARCHAR(400) NOT NULL,
  Publication_Name VARCHAR(400) NOT NULL,
  Author VARCHAR(400) NOT NULL,
  PRIMARY KEY (ISBN_Number)
);
CREATE TABLE SA
(
  Name VARCHAR(400) NOT NULL,
  Student_ID INT NOT NULL,
  Date_Hired VARCHAR(400) NOT NULL,
  Monthly_Salary VARCHAR(400) NOT NULL,
  Working_Schedule VARCHAR(400) NOT NULL,
  PRIMARY KEY (Student_ID)
);
CREATE TABLE _Student_
(
  Name VARCHAR(400) NOT NULL,
  Student_ID INT NOT NULL,
  Email_Address VARCHAR(400) NOT NULL,
  Phone_number VARCHAR(400) NOT NULL,
  PRIMARY KEY (Student_ID)
);
CREATE TABLE Loan
(
  LIB_Number INT NOT NULL,
  Author VARCHAR(400) NOT NULL,
  Due_Date VARCHAR(400) NOT NULL,
  Student_ID INT NOT NULL,
  Loan_ID INT NOT NULL,
  PRIMARY KEY (Loan_ID)
);

insert into Book values ("2020-03-25","2020-04-05","2020-04-03","2020-01-25", "Database Application", 100);
insert into Book_Type values (2,"Database Application","Hardvard Press", "Sadiksha Aryal");

insert into SA values ("John Lennon",10107,"2020-03-25", 5000,"2020-03-26");
insert into _Student_ values ("Paul McCartney",10206,"paul@gmail.com"," 06225074414");

insert into Loan values (100, "Sadiksha Aryal","2020-04-03",10305, 45);
