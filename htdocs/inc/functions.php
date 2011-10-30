<?php
# Hash a password by combining it with
# a salt and calculating a digest for
# some number of rounds.
function hashPassword($data, $salt) {
  $hooch = $data;
  for ($i = 0; $i < 37; $i ++) {
    $hooch = hash('md5',$hooch.$salt,TRUE);
  }

  return bin2hex($hooch);
}
?>
