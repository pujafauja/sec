<?php
class Auth {
  public function api_auth($username,$password) {
    if ($username == 'admin' && $password == '1234') {
      return TRUE;
    }else{
      return FALSE;
    }
  }
}
?>
