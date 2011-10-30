DROP TABLE IF EXISTS ninerpost;
DROP TABLE IF EXISTS nineruser;

-- Password is 40 characters here - 
-- 32 for the hexits of an MD5 hash,
-- 8 for the salt.
CREATE TABLE nineruser (
  username VARCHAR(20) NOT NULL PRIMARY KEY,
  realname VARCHAR(100) NOT NULL,
  password VARCHAR(40) NOT NULL,
  INDEX idx_username_password(username, password)
);

CREATE TABLE ninerpost (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(20) NOT NULL,
  topic VARCHAR(50) NOT NULL,
  body MEDIUMTEXT NOT NULL,
  INDEX idx_username (username),
  FOREIGN KEY (username) REFERENCES nineruser(username)
    ON DELETE CASCADE
);

