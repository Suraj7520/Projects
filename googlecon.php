<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('630322474549-umat824hsopkel48lmdq0o89v1lgu6al.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/coffee%20shop/coffee%20website/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>