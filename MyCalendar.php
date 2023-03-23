<?php

// class MyCalendar
// {
// public function checkDayNameOfDate($nday,$nmonth){

//    $input_date = $nday."/".$nmonth."/"."2023";

//     $datetime = DateTime::createFromFormat('d/m/Y',  $input_date);
//     return $datetime->format('l');
    
// }
// }

// class MyCalendar
// {
//     public function checkDayNameOfDate($nday, $nmonth)
//     {
//         // Check if the day value is valid (i.e. less than or equal to 31)
//         if ($nday <= 31) {
//             $input_date = $nday . "/" . $nmonth . "/" . "2023";
//             $datetime = DateTime::createFromFormat('d/m/Y', $input_date);
//             return $datetime->format('l');
//         } else {
//             return "Invalid day value: " . $nday;
//         }
//     }
// }


// class MyCalendar
// {
//     public function checkDayNameOfDate($nday, $nmonth)
//     {
//         // Check if the day value is valid based on the number of days in the month
//         switch ($nmonth) {
//             // Months with 31 days
//             case 1:
//             case 3:
//             case 5:
//             case 7:
//             case 8:
//             case 10:
//             case 12:
//                 if ($nday > 31) {
//                     return "Invalid day value: " . $nday;
//                 }
//                 break;
//             // Months with 30 days
//             case 4:
//             case 6:
//             case 9:
//             case 11:
//                 if ($nday > 30) {
//                     return "Invalid day value: " . $nday;
//                 }
//                 break;
//             // February (check for leap year)
//             case 2:
//                 $leap_year = ((int)date('Y') % 4 === 0 && ((int)date('Y') % 100 !== 0 || (int)date('Y') % 400 === 0));
//                 if ($leap_year) {
//                     if ($nday > 29) {
//                         return "Invalid day value: " . $nday;
//                     }
//                 } else {
//                     if ($nday > 28) {
//                         return "Invalid day value: " . $nday;
//                     }
//                 }
//                 break;
//             default:
//                 return "Invalid month value: " . $nmonth;
//         }
        
//         $input_date = $nday . "/" . $nmonth . "/" . "2023";
//         $datetime = DateTime::createFromFormat('d/m/Y', $input_date);
//         return $datetime->format('l');
//     }
// }

class MyCalendar
{
    public function checkDayNameOfDate($nday, $nmonth)
    {
        // Check if the month value is valid (i.e. between 1 and 12)
        if ($nmonth < 1 || $nmonth > 12) {
            return "Invalid month value: " . $nmonth;
        }

        // Check if the day value is valid based on the number of days in the month
        $num_days = cal_days_in_month(CAL_GREGORIAN, $nmonth, 2023);
        if ($nday < 1 || $nday > $num_days) {
            return "Invalid day value: " . $nday;
        }

        $input_date = $nday . "/" . $nmonth . "/" . "2023";
        $datetime = DateTime::createFromFormat('d/m/Y', $input_date);
        return $datetime->format('l');
    }
}


?>