<?php

$fruitCalendarJson = file_get_contents(__DIR__ . '/../data/fruitsCalendar.json');

echo 'Please enter a month now to see which fruit is in season' . PHP_EOL;

$getMonth = fgets(STDIN);
$getMonth = trim($getMonth);
$getMonth = strtoupper($getMonth);

echo PHP_EOL;

$fruitCalendarDecoded = json_decode($fruitCalendarJson, true);

$monthDecoded = $fruitCalendarDecoded[$getMonth];

$ok = array_key_exists ($getMonth , $fruitCalendarDecoded);

if ($ok != true){
    echo 'Invalid input. Please enter a month' . PHP_EOL;
    exit(1);
};

$monthResult = implode("\n", $monthDecoded);

echo 'The following fruits are in season in ' . $getMonth . ': ' . $monthResult . PHP_EOL;
