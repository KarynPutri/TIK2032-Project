CREATE DATABASE komentar_db;

USE komentar_db;

CREATE TABLE komentar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artikel VARCHAR(100),
    nama VARCHAR(100),
    komentar TEXT,
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);