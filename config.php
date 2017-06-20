<?php


$config = array (
          'facebook' => array(
                    'clientId'          => '1806257869689420',
                    'clientSecret'      => '7ecfb1a1053f5a6930236bd73c988a0e',
                    'redirectUri'       => 'http://kadek.cool/callback-facebook.php',
                    'graphApiVersion'   => 'v2.9'
                  ),
          'google' => array(
                     'clientId'        => '920272268474-22vaia07gfqginka6gg0dbl19r9t5r61.apps.googleusercontent.com',
                     'clientSecret'    => '0YwUwAtf9KYijb9ibXN0asVv',
                     'redirectUri'     => 'http://kadek.cool/callback-google.php',
                     'accessType'      => 'offline',
                 ),
          'instagram' => array(
                     'clientId'        => '{instagram-client-id}',
                     'clientSecret'    => '{instagram-client-secret}',
                     'redirectUri'     => 'https://kadek.cool/callback-instagram.php',
                     'host'            => 'https://api.instagram.com' //this is optional
                 )
          );
