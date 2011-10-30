<?php
# The database host
define("DBHOST", "localhost");

# Database schema/name
define("DBSCHEMA", "ninerhub");

# Database user
define("DBUSER", "ninerhub");

# Database password
define("DBPASS", "buhrenin");

# Global salt ** Change this, but only
#   once as existing user's won't be able
#   to log in if you change it.**
define("SALT", "RI6cWkW8XNDY2OPmz4ZoBCex");

# Number of rounds to hash.  Make it a
# good number - but not really necessary to change
# this value.  More rounds will slow attackers
# down in brute-forcing the plaintext password
# if they manage to compromise the source and the
# database, but it also slows down the login process
define("HASHROUNDS", 963);
?>
