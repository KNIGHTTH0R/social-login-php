<?php
require 'app.php';

// this is dedicated page for handling facebook callback
// the parameter must be exactly the same as parameter
// when generating the facebook login url
$facebookParams = $config['facebook'];

$facebook = new SocialLogin('facebook', $facebookParams);

// callback from social login always contain $_GET['code'] and $_GET['state']
if (isset($_GET['code']) && isset($_GET['state'])) {
  $user = $facebook->getUser();
  $email = $user->getEmail();
  $fullName = $user->getName();
  $picture = $user->getPictureUrl();

  echo sprintf('User Email : %s', $email).'<br/>';
  echo sprintf('User Name : %s', $fullName).'<br/>';
  echo '<img src="'.$picture.'">';

  // you get the email from social login
  // check the user for that email on your application
  // if found then create session for that user
  // if not found create new user and create session for that user
}
