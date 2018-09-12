<?php
/**
 * Created by PhpStorm.
 * User: Do Viet Duy
 * Date: 9/12/2018
 * Time: 11:44
 */
$today = date('Y-m-d');

$day1 = date("2018-09-11");

$timeLive = strtotime($today) - strtotime($day1);

echo $timeLive/(60*60);
echo "<br>";
$time10 = date($day1);
echo $time10;



function getLivedHours($birthday) {
    $today = date('Y-m-d');
    $birthdayInt = date("$birthday");
    $timeLive = strtotime($today) - strtotime($birthdayInt);
    return $timeLive/(60*60);
}

$time1 = "2018-09-10";
echo getLivedHours($time1);

?>

