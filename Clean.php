<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 11/11/17
 * Time: 3:00 PM
 */

$initialDeposit = 10000;
$totalDuration = 20;
$yearlyInterestRate = .06;

echo $initialDeposit * (1+$yearlyInterestRate)**$totalDuration;

