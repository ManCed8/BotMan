<?php
$access_token = 'tw2Frl00guah6zz+N7nQYB7noJshtHZ0m+6dsxeKX3+jKziXdGO9tA/hM9CJGseaQjpSlmKdV746hnEZtZDXzaGNp2EoY8oufecDGKhA+l4vSqVOXNVuRpCvGCeCK9IVVoxKMH1Kove2LzhgIENv9QdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>