<?php
$access_token = '5aS4sAOC/jP0u8Kp+BTChH0dRGTo5xg0PXy71//7BXPwPV0OJqgbXgcHR6ESjNUWZ9tZqR94wQw+KoHRbQG91GhJjb6F+sC8g1aSgppjPTKJwZcKH8/CxRgC+INLL1PdmKfiTUvDNdnaWjSomVXyQgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
