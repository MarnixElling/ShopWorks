<?php
$curl = curl_init();
$auth_data = array(
    //'sw-access-key'   => 'SWSCU1G0RG4YWLRXC1VKZUVQVW',
    // 'client_id'      => 'SWSCU1G0RG4YWLRXC1VKZUVQVW',
    // 'client_secret'  => 'ck1mMjNrZmxGWDVka1JyOW5BVDdUUHYzVm9wWG1NTTRzQjFIeDY',
    // 'grant_type'     => 'client_credentials'
);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $auth_data);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('sw-access-key:SWSCU1G0RG4YWLRXC1VKZUVQVW'));
curl_setopt($curl, CURLOPT_URL, 'http://paulvandillen.cb04.shopworks-clients.nl/sales-channel-api/v1/product');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$result = curl_exec($curl);
echo "<pre>";
if(!$result){
    die("Connection Failure");
}
curl_close($curl);
echo "<br />------<br />";
$apiData = json_decode($result);
var_dump($apiData);
echo "<br />------";