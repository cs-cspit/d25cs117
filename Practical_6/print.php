<?php
$name = $_GET["name"];
$fathername = $_GET["fathername"];
$mothername = $_GET["mothername"];
$dob = $_GET["dob"];
$gender = $_GET["gender"];
$rollno = $_GET["rollno"];
$semester = $_GET["semester"];
$division = $_GET["division"];
$branch = $_GET["branch"];
echo "<h1><i>Wellcome </i>",$name,"</h1>";
echo "<br>Father Name :",$fathername;
echo "<br>Mother Name :",$mothername;
echo "<br>Date Of Birth :",$dob;
echo "<br>Gender :",$gender;
echo "<br>Roll No :",$rollno;
echo "<br>Semester :",$semester;
echo "<br>Division :",$division;
echo "<br>Branch :",$branch;
?>