<?php



require "vendor/autoload.php";

$access_token = '4jqw6X3bCLfP3A7nUKyCd5uOQObSiQj0fqKGc5R/YbTfVIFPdLC11bArjhwzp9CSTh3H+eDbWKikgYtA6mdTNRO+TOb6GlQL/UlMU+XDkR1Zp5lL4NC9RH94Zevq7Hrf5KydxMODpcybL3Keb9imuAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ad501ac278e538766dc7a05d8a1b3eb2';

$pushID = 'U663c64cfa554f7ffaf043cdda4373576';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Welcome to thaksinhospital Line bot');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







