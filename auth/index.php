<?php

  // Require composer autoloader
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
    'redirect_uri' => 'http://taskmart.online/',
    'audience' => $audience,
    'scope' => 'openid profile',
    'persist_id_token' => true,
    'persist_access_token' => true,
    'persist_refresh_token' => true,
  ]);

  $userInfo = $auth0->getUser();
  printf( 'Hello %s!', htmlspecialchars( $userInfo['name'] ) );
  echo "<br>";
  printf( 'Unique Id %s', htmlspecialchars( $userInfo['sub'] ) );


?>
              
<?php if(!$userInfo): ?>
<div class="login-box auth0-box before">
  
</div>
<?php else: ?>
<div class="logged-in-box auth0-box logged-in">
  <img class="avatar" src="<?php echo $userInfo['picture'] ?>"/>
  <h2>Welcome <span class="nickname"><?php echo $userInfo['nickname'] ?></span></h2>
  <a id="qsLogoutBtn" class="btn btn-warning btn-logout" href="./auth/logout.php">Logout</a>
</div>
<?php endif ?>

