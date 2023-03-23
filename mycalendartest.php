<?php declare(strict_types=1);
// require_once 'vendor/autoload.php';

include "MyCalendar.php";
use PHPUnit\Framework\Testcase;

class MyCalendarTest extends TestCase{
    public function testCheckDayNameOfDate(){
        $c1 = new MyCalendar();
$this->assertEquals("Wednesday", $c1->checkDayNameOfDate("15","03"));

    }

}
?>