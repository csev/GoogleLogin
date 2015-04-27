<?php 

// Configuration file - copy from config-dist.php to config.php
// and then edit.  Since this has passwords and other secrets
// never check config.php into a source repository

// Set these to your API key for your Google Sign on
// https://console.developers.google.com/
// If you want to use a localhost instance for testing, 
// you do not need the full url in the JavaScipt Origin
// or RedirectURIs - all you need is one entry:
//      http://localhost
// Thar covers all ports
$google_client_id = 'cj5r1uns1eceqnpv4.apps.googleusercontent.com';
$google_client_secret = '4ES...mRMr2';

$this_url = 'http://localhost:8888/GoogleLogin/index.php';
// $this_url = 'https://online.dr-chuck.com/login.php';

// If you want to get the old openid_id value for a particular
// domain that was used in the old system - leave false not to 
// extract the old openid_id value
$openid_realm = false;
// $openid_realm = "https://online.dr-chuck.com";
