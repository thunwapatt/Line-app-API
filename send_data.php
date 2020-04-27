<?php



require "lineapi/autoload.php";

### channelSecret  -  get from LINE official Channel ###
$access_token = '';

### channelSecret  -  get from LINE official Channel ###
$channelSecret = '';

### pushID is LineID who want to send.  -  get from chat bot ###
$pushID = '';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Welcome to thaksinhospital Line bot');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







