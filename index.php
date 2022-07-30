<?php



require "vendor/autoload.php";

$access_token = 'Dv9pS0sFfgShS5vBjl/OTMF01ZyY97hRYXUJ4R+dmSbeIRA1k2o7c8Vjb9XHwiaz2THaj0KXhwIpFBszkij53d7RtXADPg09r84fa0kDmYzXBhZbQ783pSzK1eh6ZqmfuHs2NkiSmCCfiB9r/nTU/gdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ac37d34bf065037a11450f8c05e39e6e';

$pushID = 'dum_soken';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







