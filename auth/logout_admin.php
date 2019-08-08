<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/dotenv-loader.php';
use Auth0\SDK\Auth0;

$domain        = getenv('AUTH0_DOMAIN');
$client_id     = getenv('AUTH0_CLIENT_ID');
$client_secret = getenv('AUTH0_CLIENT_SECRET');
$redirect_uri  = getenv('AUTH0_CALLBACK_URL');
$audience      = getenv('AUTH0_AUDIENCE');

if($audience == ''){
    $audience = 'https://' . $domain . '/userinfo';
}

$auth0 = new Auth0([
  'domain' => 'taskmart.eu.auth0.com',
  'client_id' => 'u69bIFchiNgtl7Iq1xu49Er2LRPcYCZI',
  'client_secret' => 'RckKuJZNdl_uG5tEAvShAlnW4zo3zXQ_ltMyzKJA8didlpnzw61IqU207Q7qrYLO',
  'redirect_uri' => 'http://taskmart.online/admin/',
  'audience' => $audience,
  'scope' => 'openid profile',
  'persist_id_token' => true,
  'persist_refresh_token' => true,
]);

$auth0->logout();
header('Location: ' . 'http://' . $_SERVER['HTTP_HOST']);
die();