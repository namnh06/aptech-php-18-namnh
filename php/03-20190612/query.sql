-- TAO RA KHO aptech_php_18_namnh;
CREATE DATABASE aptech_php_18_namnh;

-- USE aptech_php_18_namnh;
-- TAO RA BANG users;
CREATE TABLE aptech_php_18_namnh.users(
	id INT,
    name varchar(50),
    email varchar(255),
    phone varchar(12)
);

-- THEM DU LIEU VAO BANG
INSERT INTO aptech_php_18_namnh.users
(id,name) VALUES (1,'Nam');

-- LAY DU LIEU RA
SELECT * FROM aptech_php_18_namnh.users;

-- XOA DATABASE HOAC BANG
DROP

-- XOA DU LIEU
DELETE

-- SUA DU LIEU
UPDATE

CREATE TABLE aptech_php_18_namnh.posts
( 
id INT PRIMARY KEY AUTO_INCREMENT,
title varchar(255)
);

SELECT * FROM aptech_php_18_namnh.posts
WHERE id = 2;

INSERT INTO aptech_php_18_namnh.posts(title)
VALUES ('Bai viet 1'),('Bai viet2');







































































