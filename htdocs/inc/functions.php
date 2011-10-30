<?php
include_once('config.php');

# Hash a password by combining it with
# a salt and calculating a digest for
# some number of rounds.
function hashPassword($data, $salt) {
  $hooch = $data;
  for ($i = 0; $i < HASHROUNDS; $i ++) {
    $hooch = hash('md5',$hooch.$salt.SALT,TRUE);
  }

  return bin2hex($hooch);
}
?>
