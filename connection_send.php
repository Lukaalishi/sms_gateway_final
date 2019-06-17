<?php
require_once('vendor/autoload.php');
use Shipu\MuthoFun\MUTHOFUN;
$config = [
    'username' => 'lukatoni',
    'password' => 'lukatoni'
];

$sms = new MUTHOFUN($config);
$response = $sms->message('your text here !!!', '0769381011')->send(); // Guzzle Response with request data
return $response->autoParse(); // Getting only response contents.
// For another example please see below laravel section.
//Send same message to all users
//$sms = MUTHOFUN::message('your text here !!!')
//    ->to('01616022669')
//    ->to('01845736124')
//    ->to('01745987364')
//    ->send();
//
//// or you can try below statements also
//
//$sms = MUTHOFUN::message('your text here !!!', '01616022669')
//    ->to('01845736124')
//    ->to('01745987364')
//    ->send();
//
//// or
//
//$users = [
//    '01616022669',
//    '01845736124',
//    '01745987364'
//];
//$sms = MUTHOFUN::message('your text here !!!',$users)->send();








