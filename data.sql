CREATE DATABASE IF NOT EXISTS test;
USE test;

DROP TABLE IF EXISTS name_list;

CREATE TABLE name_list ( 
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(64),
  PRIMARY KEY (id)
);

INSERT INTO name_list (name) VALUES ('sato');
INSERT INTO name_list (name) VALUES ('suzuki');
INSERT INTO name_list (name) VALUES ('takahashi');
INSERT INTO name_list (name) VALUES ('tanaka');
INSERT INTO name_list (name) VALUES ('ito');
INSERT INTO name_list (name) VALUES ('watanabe');
INSERT INTO name_list (name) VALUES ('yamamoto');
INSERT INTO name_list (name) VALUES ('nakamura');
INSERT INTO name_list (name) VALUES ('kobayashi');
INSERT INTO name_list (name) VALUES ('kato');
