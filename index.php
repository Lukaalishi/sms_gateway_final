<?php
require_once('vendor/autoload.php');
$basic  = new Nexmo\Client\Credentials\Basic('a90da8d8', 'aPX299OsLc5ffcWg');
$client = new Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '255769381011',
    'from' => 'Nexmo',
    'text' => 'Hello from Your Husband'
]);







