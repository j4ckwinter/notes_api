use database;
CREATE TABLE note
(
    id      INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title   VARCHAR(255) NOT NULL,
    content VARCHAR(255) NOT NULL
);
INSERT INTO note (title, content)
VALUES ('Reply to emails', 'Reply to all outstanding emails');
INSERT INTO note (title, content)
VALUES ('Learn php', 'Build a simple symfony rest api');
INSERT INTO note (title, content)
VALUES ('Cancel subscription', 'Cancel Netflix subscription');