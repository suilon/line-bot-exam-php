<?php


$access_token = 'Dv9pS0sFfgShS5vBjl/OTMF01ZyY97hRYXUJ4R+dmSbeIRA1k2o7c8Vjb9XHwiaz2THaj0KXhwIpFBszkij53d7RtXADPg09r84fa0kDmYzXBhZbQ783pSzK1eh6ZqmfuHs2NkiSmCCfiB9r/nTU/gdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue6b7ba3e7d97d12b17956c3c6562d63f';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

