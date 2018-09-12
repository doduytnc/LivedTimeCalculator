<?php
/**
 * Created by PhpStorm.
 * User: Do Viet Duy
 * Date: 9/12/2018
 * Time: 10:47
 */
class LivedTimeCalculator {
    private $birthday;
    public function getLivedHours($birthday) {
        if ($birthday == "") {
            return 'Please enter birthday';
        }
        if (strtotime(date('Y-m-d'))> strtotime(date($birthday))) {
            return 'Birthday exceed today';
        }

        $today = date('Y-m-d');
        $birthdayInt = date($birthday);
        $timeLive = strtotime($today) - strtotime($birthdayInt);
        return $timeLive/(60*60);
    }
}
?>


