<?php 

// Configuration file - copy from config-dist.php to config.php
// and then edit.  Since this has passwords and other secrets
// never check config.php into a source repository

// Set these to your API key for your Google Sign on
// https://console.developers.google.com/
$google_client_id = 'cj5r1uns1eceqnpv4.apps.googleusercontent.com';
$google_client_secret = '4ES...mRMr2';

$redirect_url = 'http://localhost:8888/GoogleLogin/index.php';
// $redirect_url = 'https://online.dr-chuck.com/login.php';

// If you want to retrieve the old openid_id value for a particular
// domain that was used in the old OAuth system - leave false not to 
// extract the old openid_id value.  Generally this is not the same
// as the redirect URL (above)
$openid_realm = false;
// $openid_realm = "https://online.dr-chuck.com";
