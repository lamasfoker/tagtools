CREATE TABLE File (
  id VARCHAR(100) NOT NULL PRIMARY KEY,
  email VARCHAR(300) NOT NULL,
  name VARCHAR(500) NOT NULL,
  path VARCHAR(800) NOT NULL,
  type VARCHAR(20) NOT NULL,
  tag VARCHAR(800)
);