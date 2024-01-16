<!-- server.php -->

<?php

function checkTime($i) {
    return ($i < 10) ? "0" . $i : $i;
}

function getTime() {
    $currentTime = date("H:i:s");

    return $currentTime;
}

function getDay() {
    $currentDay = date("l");
    $currentDate = date("d-m-Y");

    return [$currentDay, $currentDate];
}

// WeatherAPI logic goes here (not included in this example)

$currentTime = getTime();
$currentDayAndDate = getDay();
$currentDay = $currentDayAndDate[0];
$currentDate = $currentDayAndDate[1];

// Provide some sample data for temperature and weather condition
$temperature = 25; // Replace with actual temperature from WeatherAPI
$weatherCondition = "Sunny"; // Replace with actual weather condition from WeatherAPI

include "index.php";
