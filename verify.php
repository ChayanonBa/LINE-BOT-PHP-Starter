<?php
$access_token = '/YlKiNJ5IgY92CrlqOWdLao1IjU4/6fYfg4nI5gNMe1u8s+MOJGBLjEGdOAcoiJHD0FthZPSAy9sYaCgzvSNCGRo59ZlPAxE2Kt2voVLLbhDHqS6DwD90ZmEa13m3C4CYIyKFvKDYWfA/nF0dpeEQQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
