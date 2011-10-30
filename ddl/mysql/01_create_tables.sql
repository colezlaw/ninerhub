DROP TABLE IF EXISTS ninerpost;
DROP TABLE IF EXISTS nineruser;

CREATE TABLE nineruser (
  username VARCHAR(20) NOT NULL PRIMARY KEY,
  realname VARCHAR(100) NOT NULL,
  password VARCHAR(30) NOT NULL,
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

