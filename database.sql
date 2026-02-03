CREATE DATABASE quiz_db;
USE quiz_db;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(100)
);

CREATE TABLE questions(
id INT AUTO_INCREMENT PRIMARY KEY,
question TEXT,
a VARCHAR(200),
b VARCHAR(200),
c VARCHAR(200),
d VARCHAR(200),
correct VARCHAR(5)
);

INSERT INTO questions
(question,a,b,c,d,correct) VALUES
('PHP stands for?','Hypertext Preprocessor','Pretext','Personal Home','None','a'),
('HTML is?','Programming','Markup','Database','Server','b'),
('CSS used for?','Design','Logic','Database','API','a'),
('MySQL is?','Language','DB','Browser','OS','b'),
('JS is?','Script','Style','Server','App','a');