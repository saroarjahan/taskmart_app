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

  $taskid=$_GET['taskid'];

  
  if (!empty($taskid)) {
    $urlend='study/?taskid='.$taskid;
  }

  $cookie_user_id = "user";
    $cookie_value = "";
    setcookie($cookie_user_id , $cookie_value, time() + (86400*365*30), "/");
    if ($_COOKIE[user]!="") {
      header("Refresh:0");
    }


  $completion_code=$_GET['completion_code'];
  if (!empty($completion_code)) {
    $urlend='completed/?completion_code='.$completion_code;
    //set cookies zero
    $cookie_user_id = "user";
    $cookie_value = "";
    setcookie($cookie_user_id , $cookie_value, time() + (86400*365*30), "/");
    if ($_COOKIE[user]!="") {
      header("Refresh:0");
    }
  }



  $auth0 = new Auth0([
      'domain' => 'taskmart.eu.auth0.com',
      'client_id' => 'u69bIFchiNgtl7Iq1xu49Er2LRPcYCZI',
      'client_secret' => 'RckKuJZNdl_uG5tEAvShAlnW4zo3zXQ_ltMyzKJA8didlpnzw61IqU207Q7qrYLO',
      'redirect_uri' => 'http://taskmart.online/'.$urlend,
      'audience' => $audience,
      'scope' => 'openid profile',
      'persist_id_token' => true,
      'persist_access_token' => true,
      'persist_refresh_token' => true,
  ]);

  $auth0->login();