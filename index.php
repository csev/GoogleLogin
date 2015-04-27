<?php

// Load the client_id and client_secret
require("config.php");

// Load the library code
require('lib/vendor/DrChuck/Google/GoogleLogin.php');
require('lib/vendor/DrChuck/Google/JWT.php');

session_start();

$glog = new \DrChuck\Google\GoogleLogin($google_client_id,
    $google_client_secret,$this_url,$openid_realm);

if ( ! isset($_GET['code']) ) {
    $_SESSION['GOOGLE_STATE'] = md5(uniqid(rand(), TRUE));
    $loginUrl = $glog->getLoginUrl($_SESSION['GOOGLE_STATE']);
    echo('<a href="'.$loginUrl.'">Google Login</a>');
    return;
}

if ( isset($_SESSION['GOOGLE_STATE']) && isset($_GET['state']) ) {
    if ( $_SESSION['GOOGLE_STATE'] != $_GET['state'] ) {
        echo("Error state mismatch\n");
        unset($_SESSION['GOOGLE_STATE']);
        return;
    }
} else {
    echo("Error missing state\n");
    unset($_SESSION['GOOGLE_STATE']);
    return;
}

$google_code = $_GET['code'];
$authObj = $glog->getAccessToken($google_code);
$user = $glog->getUserInfo();
echo("<pre>\n");
echo("user\n");
var_dump($user);
