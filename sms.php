<?php

$number = 254712982944;
$code = 1234;

$message = urlencode("your verification code is $code");
$encodedNumber = urlencode($number);
$curl = curl_init();

$url =
    'https://kenyasms.rpdigitalphone.com/smsnew/HTTP/?username=Whitecross&password=123456&thread_text=' .
    $message .
    '&thread_recievers=' .
    $encodedNumber .
    '&sender=Whitecross&coding=1&sms_type=trans';
// $url2 = "https://bsms.smsairworks.com/smsnew/HTTP/?username=Whitecross&password=123456&thread_text=".$code."&thread_recievers=".$number."&sender=Whitecross&coding=1&sms_type=trans";

curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
]);

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
