# social-login-php (facebook, google and instagram login)
Sample implementation of social login in php, using php league oauth 2 client library

# Requirements
* PHP 5.6
* Apache web server (or any web server)

# How to use
Simply copy or clone this git repo to your apache web server root dir (/var/www/html/social-login-php/),
and then create apache virtual host with domain name kadek.cool


# NOTES
This sample codes already comes with app id for facebook and google, but you need
to create apache virtual host on your local computer with a domain named 'kadek.cool'
otherwise you need to get your own app id.

You can change the app id, redirect uri and other parameters in the configuration
file located at config.php.

The purpose of this codes is for educational/learning.
