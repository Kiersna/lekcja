CREATE DATABASE hobby;
USE hobby;

CREATE TABLE uzytkownicy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(30),
    nazwisko VARCHAR(30),
    pasja VARCHAR(50),
    wiek INT
);

INSERT INTO uzytkownicy (imie, nazwisko, pasja, wiek) VALUES 
('Jan', 'Kowalski', 'Fotografia', 25),
('Anna', 'Nowak', 'Górskie wycieczki', 32),
('Piotr', 'Wiśniewski', 'Programowanie', 19);