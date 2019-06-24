USE test;

CREATE TABLE posts(
	id INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(255)
);


INSERT INTO posts(title)
VALUES ('test 1') ,('test 2'), ('test 3'), ('test 4'), ('test 5');


CREATE TABLE categories(
	id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255)
);


INSERT INTO categories(name)
VALUES ('thoi su'), ('kinh te'), ('something');



CREATE TABLE category_post(
	id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT,
    category_id INT,
    UNIQUE (post_id, category_id),
    FOREIGN KEY (post_id) REFERENCES posts(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);


INSERT INTO category_post (post_id, category_id)
VALUES (1,1), (1,2),(2,1),(1,3),(2,2);


SELECT * FROM category_post ORDER BY id;  

SELECT  FROM 
category_post as A
JOIN posts as B ON A.post_id = B.id
JOIN categories as C ON A.category_id = C.id
WHERE A.post_id = 1;
