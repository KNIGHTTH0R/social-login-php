<?php
class SocialLogin {

  protected $type;
  protected $provider;

  public function __construct($type = 'facebook', $params = []) {
    switch ($type) {
      case 'facebook' :
          $this->provider = new \League\OAuth2\Client\Provider\Facebook($params);
          break;
      case 'google' :
          $this->provider = new League\OAuth2\Client\Provider\Google($params);
          break;
      case 'instagram' :
          $this->provider = new League\OAuth2\Client\Provider\Instagram($params);
          break;
      }
      $this->type = $type;
  }

  public function generateLoginUrl() {
    $loginUrl = '';
      switch ($this->type) {
        case 'facebook' :
            $loginUrl = $this->provider->getAuthorizationUrl(['scope' => ['email'],]);
            break;
        case 'google' :
            $loginUrl = $this->provider->getAuthorizationUrl();
            break;
        case 'instagram' :
            $loginUrl = $this->provider->getAuthorizationUrl();
            break;
          }

    return $loginUrl;
  }

  public function getToken() {
    $token = $this->provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);
    return $token;
  }

  public function getUser($token = null) {
    if (empty($token)) {
      $token = $this->getToken();
    }
    $user = $this->provider->getResourceOwner($token);
    return $user;
  }

}
