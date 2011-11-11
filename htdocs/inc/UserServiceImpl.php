<?
include_once('functions.php');
include_once('IUserService.php');

$USER_IMPLEMENTATION = "UserImpl";

class UserImpl implements IUser {
  public $username;
  public $passwordHash;

  public function validatePassword($password) {
    # As other places, we assume the first 8
    #  characters of the hash is the salt.
    if (preg_match('/^([A-Za-z0-9]{8})([A-Fa-f0-9]{32})$/', $this->passwordHash, $matches)) {
      $salt = $matches[1];
      $hash = $matches[2];
      
      if (hashPassword($password, $salt) == $matches[2]) {
        return TRUE;
      }
    } else {
      throw new Exception("Invalid password hash [$this->passwordHash]");
    }

    return FALSE;
  }
}


