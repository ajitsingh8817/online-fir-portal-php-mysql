CREATE DATABASE fir_portal;
USE fir_portal;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    role VARCHAR(20)
);

INSERT INTO users (username, password, role) VALUES ('admin', 'admin123', 'admin');

CREATE TABLE firs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    contact VARCHAR(20),
    email VARCHAR(100),
    complaint TEXT,
    status VARCHAR(50),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
