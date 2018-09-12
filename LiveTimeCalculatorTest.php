<?php
/**
 * Created by PhpStorm.
 * User: Do Viet Duy
 * Date: 9/12/2018
 * Time: 10:52
 */
use PHPUnit\Framework\TestCase;

require_once 'LivedTimeCalculator.php';

class LiveTimeCalculatorTest extends TestCase {
    function testBirthdayNull() {
        $birthday = "";
        $expected = 'Please enter birthday';
        $actual = LivedTimeCalculator::getLivedHours($birthday);
        $this->assertEquals($expected, $actual);
    }

    function testExceedToday() {
        $exceed = strtotime(date('Y-m-d')) + 1;
        $exceedTime = date($exceed);
        $birthday = $exceedTime;
        $expected = 'Birthday exceed today';
        $actual = LivedTimeCalculator::getLivedHours($birthday);
        $this->assertEquals($expected, $actual);
    }

}