CREATE DATABASE IF NOT EXISTS library_db;
USE library_db;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role VARCHAR(10) NOT NULL DEFAULT 'user'
);

CREATE TABLE IF NOT EXISTS books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  isbn VARCHAR(20) NOT NULL,
  available ENUM('Yes','No') NOT NULL DEFAULT 'Yes'
);

INSERT INTO users (username, password, role) VALUES
('admin', '$2y$10$rI1zT/CXrkFknhkxIPgXyuyRHMTbkYfBz1Y5G9zNmcDgz4RArlBse', 'admin');

INSERT INTO books (title, author, isbn, available) VALUES
('Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', '9780590353427', 'Yes'),
('The Hobbit', 'J.R.R. Tolkien', '9780345339683', 'Yes');