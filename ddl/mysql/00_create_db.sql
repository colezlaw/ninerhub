-- Set these top two values to the user ID
-- and password you want to use to connect
-- to the db.  Be sure to set these up in
-- config.php in the app directory
SET @`DBUSER`='ninerhub';
SET @`DBPASS`='buhrenin';

-- Should not need to edit below here
CREATE DATABASE IF NOT EXISTS ninerhub;

-- Blech!  It seems that I can't use
-- GRANT with variables, so this has to be
-- done the old-fashioned way
USE mysql;

INSERT INTO user (host, user, password)
VALUES ('localhost', @DBUSER, PASSWORD(@DBPASS));

INSERT INTO db (host,
  db,
  user,
  select_priv,
  insert_priv,
  update_priv,
  delete_priv) VALUES (
  'localhost',
  'ninerhub',
  @DBUSER,
  'Y','Y','Y','Y');

FLUSH PRIVILEGES;
