<?php



require "vendor/autoload.php";

$access_token = '5aS4sAOC/jP0u8Kp+BTChH0dRGTo5xg0PXy71//7BXPwPV0OJqgbXgcHR6ESjNUWZ9tZqR94wQw+KoHRbQG91GhJjb6F+sC8g1aSgppjPTKJwZcKH8/CxRgC+INLL1PdmKfiTUvDNdnaWjSomVXyQgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '11bf38fca4ce3f819dad4982b8dd9b69';

$pushID = 'Uf1737122574cd19812eb6bf7b0542f12';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







