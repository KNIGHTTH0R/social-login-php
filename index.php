<?php
require 'app.php';

// get parameter from config
$facebookParams = $config['facebook'];
$googleParams = $config['google'];
$instagramParams = $config['instagram'];

// create object of SocialLogin class for each social media
$facebook = new SocialLogin('facebook', $facebookParams);
$google = new SocialLogin('google', $googleParams);
$instagram = new SocialLogin('instagram', $instagramParams);

?>

<!-- generate and display the login url for each social media !-->
<a href="<?=$facebook->generateLoginUrl()?>">login via facebook</a><br/>
<a href="<?=$google->generateLoginUrl()?>">login via google</a><br/>
<a href="<?=$instagram->generateLoginUrl()?>">login via instagram</a>
