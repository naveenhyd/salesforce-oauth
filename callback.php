<?php

/**
 * @author Naveen
 */
include_once "config.php";
echo "<pre>";
print_r($_REQUEST);
if (!empty($_REQUEST['code'])) {

    $url = SALESFORCE_URL . "/token";
    $data = array(
        "code" => $_REQUEST['code'],
        "grant_type" => "authorization_code",
        "client_id" => CONSUMER_KEY,
        "client_secret" => CLIENT_SECRET,
        "redirect_uri" => REDIRECT_URL
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    
//    print_r($response);
}