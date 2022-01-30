<?php
require_once 'classes/GoogleAnalyticsSource.php';
require_once 'classes/DbAnalyticsSource.php';
require_once 'classes/SemrushAnalyticsSource.php';
require_once 'functions/isJson.php';

// Make instance for each class of source and add it in instances Array

$instancesArr = array(
    "GoogleAnalyticsSourceInstance" => new GoogleAnalyticsSource,
    "DbAnalyticsSourceInstance" => new DbAnalyticsSource,
    "SemrushAnalyticsSourceInstance" => new SemrushAnalyticsSource);

$dataArr = array();
$errorArr = array();

foreach ($instancesArr as $instance) {
    $data = $instance->get_data();
    $sourceName = $instance->sourceName;
    if (isJson($data)) {
        array_push($dataArr, $data);
    } else {
        $errorMessage = "Can't get data from " . $sourceName;
        array_push($errorArr, $errorMessage);

    }

}

$dataObject = new stdClass();

if (!$errorArr) {
    $dataObject->error = false;
    $dataObject->message = "";

} else {
    $dataObject->error = true;
    foreach ($errorArr as $message) {
        $dataObject->message[] = $message;
    }

}

$dataObject->data = $dataArr;
$myJSON = json_encode($dataObject);
