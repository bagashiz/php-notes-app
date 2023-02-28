DROP TABLE IF EXISTS notes;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE notes (
	id INT AUTO_INCREMENT PRIMARY KEY,
	body TEXT NOT NULL,
	user_id INT NOT NULL,
	FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- populate the tables
INSERT INTO users (email, password)
VALUES
	('john@email.com', 'password'),
	('jane@email.com', 'password'),
	('jack@email.com', 'password');

INSERT INTO notes (body, user_id)
VALUES
	('This is a note', 1),
	('This is another note', 1),
	('This is a note from Jane', 2),
	('This is a note from Jack', 3);
