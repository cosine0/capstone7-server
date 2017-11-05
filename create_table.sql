CREATE TABLE userinfo (
  user_no INT         NOT NULL AUTO_INCREMENT,
  userid  VARCHAR(32) NOT NULL,
  name    VARCHAR(32),
  point   INT(11)              DEFAULT 0,
  PRIMARY KEY (user_no, userid)
)
  ENGINE = INNODB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8;

CREATE TABLE ADinfo (
  ad_no      INT         NOT NULL AUTO_INCREMENT,
  name       VARCHAR(15),
  ad_userid  VARCHAR(32) NOT NULL,
  object_id  VARCHAR(32) NOT NULL,
  latitude   DECIMAL(11, 6)       DEFAULT 0.000000,
  longitude  DECIMAL(11, 6)       DEFAULT 0.000000,
  altitude   DECIMAL(11, 6)       DEFAULT 0.000000,
  bearing    DECIMAL(11, 6)       DEFAULT 0.000000,
  banner_url VARCHAR(32)          DEFAULT NULL,
  PRIMARY KEY (ad_no, ad_userid, object_id),
  FOREIGN KEY (ad_no) REFERENCES userinfo (user_no)
)
  ENGINE = INNODB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8;

CREATE TABLE commentinfo (
  comm_no   INT         NOT NULL AUTO_INCREMENT,
  ad_userid VARCHAR(32) NOT NULL,
  date_time TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,
  object_id VARCHAR(32) NOT NULL,
  comm      VARCHAR(100)         DEFAULT NULL,
  likes     INT(11)              DEFAULT NULL,
  latitude  DECIMAL(11, 6)       DEFAULT 0.000000,
  longitude DECIMAL(11, 6)       DEFAULT 0.000000,
  altitude  DECIMAL(11, 6)       DEFAULT 0.000000,
  del_check INT(1)               DEFAULT 0,
  PRIMARY KEY (comm_no, ad_userid, object_id),
  FOREIGN KEY (comm_no) REFERENCES userinfo (user_no)
)
  ENGINE = INNODB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8;