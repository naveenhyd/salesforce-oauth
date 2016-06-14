<?php

/**
 * @author Naveen
 */
include_once "config.php";

$data = array(
    "response_type" => "code",
    "client_id" => CONSUMER_KEY,
    "redirect_uri" => REDIRECT_URL
);

$data = http_build_query($data);

$loginUrl = SALESFORCE_URL . "/authorize?" . $data;
//echo $loginUrl;
echo '<a href="' . $loginUrl . '">Click here</a>';


