<?php
include_once ('../htdocs/inc/functions.php');
include_once ('../htdocs/inc/UserServiceImpl.php');

echo hashPassword('password', '12345678') . "\n";

echo "Using user implementation class $USER_IMPLEMENTATION\n";
$us = new $USER_IMPLEMENTATION();
$us->username = "will";
$us->passwordHash = "123456788b9fb748f1322d41d6e8e6b5a2bbd680";
if (! $us->validatePassword("password")) {
  echo "FAIL - password does not validate";
} else {
  echo "WIN - password validates";
}
?>

