<?php
require_once 'classes/GoogleAnalyticsSource.php';
require_once 'classes/DbAnalyticsSource.php';
require_once 'classes/SemrushAnalyticsSource.php';
require_once 'functions/isJson.php';

// Make instance for each class of source and add it in instances Array

$instancesArr = array(
    "GoogleAnalyticsSourceIstance" => new GoogleAnalyticsSource,
    "DbAnalyticsSourceIstance" => new DbAnalyticsSource,
    "SemrushAnalyticsSourceIstance" => new SemrushAnalyticsSource);

$dataArr = array();
$errorArr = array();

foreach ($instancesArr as $instance) {
    $data = $instance->get_data();
    if (isJson($data)) {
        array_push($dataArr, $data);
    } else {
        array_push($errorArr, "Can't get data");

    }

}

$myObj = new stdClass();

if (!$errorArr) {
    $myObj->error = false;
    $myObj->message = "";

} else {
    $myObj->error = true;
    $myObj->message = "Can't get data";

}

$myObj->data = $dataArr;

$myJSON = json_encode($myObj);
