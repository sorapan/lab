<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'www.google.co.th');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, 'data1=data1&data2=data2');
$result = curl_exec ($curl);
curl_close ($curl);

?>