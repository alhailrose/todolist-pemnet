CREATE TABLE user(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    name VARCHAR(128),
    email VARCHAR(128),
    password VARCHAR(256),
    image VARCHAR(128),
    date_created INT
) COMMENT '';
