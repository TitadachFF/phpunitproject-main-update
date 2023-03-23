<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="checkday.css">
</head>
<body>

<div class="time-card">
<?php
include "MyCalendar.php";


$nday = $_POST["nday"];
$nmonth = $_POST["nmonth"];

$c1 = new MyCalendar();

echo  " Day Name is ".$c1->checkDayNameOfDate($nday,$nmonth);


?>
    </div> 


    
</body>
</html>


