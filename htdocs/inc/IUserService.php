<?php
interface IUserService {
  public function getUser($username);
}

interface IUser {
  public function validatePassword($password);
}
?>
