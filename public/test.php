<?php
error_reporting(E_ALL);
ini_set('diplay_errors', 1);
ini_set('html_errors', 1);

$message = 'hello world';


// echo $message;

$number = 65;

/*
echo $number;
 */

$testArray = array('amy', 'meg',2,5.0511,array('blurt'));

$bob = array(
    'message' => 'this is a message',
'time' => 7,
'sound' => 'bingbong',
);
//var_dump($testArray);
//var_dump($bob);

//echo $testArray[1];


function totalStringLength ($stringOne, $stringTwo)
{
    $number = strlen($stringOne) + strlen($stringTwo);

return $number;
}

$newNumber = totalStringLength('amy', 'meg');

echo $newNumber;
























































































//echo $bob['message'];

foreach ($bob as $key => $value)
{
    echo $key . ' ' . $value .' <br />';
}