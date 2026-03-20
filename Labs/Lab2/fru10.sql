-- Author: Jerry Yauti
-- Date: 20th March 2026
-- Unit: IS312 Web Application Development

CREATE DATABASE IF NOT EXISTS FRU10;
USE FRU10;

-- Table for Program details [cite: 20]
CREATE TABLE IF NOT EXISTS Program (
    ProgramCode VARCHAR(10) PRIMARY KEY,
    ProgramName VARCHAR(100) NOT NULL
);

-- Table for Student details [cite: 20]
CREATE TABLE IF NOT EXISTS Student (
    StudentNo INT(10) PRIMARY KEY,
    Firstname VARCHAR(50) NOT NULL,
    Lastname VARCHAR(50) NOT NULL,
    Gender VARCHAR(10),
    ContactNo VARCHAR(15),
    ProgramCode VARCHAR(10),
    FOREIGN KEY (ProgramCode) REFERENCES Program(ProgramCode)
);

-- Sample Data [cite: 27]
INSERT INTO Program (ProgramCode, ProgramName) VALUES ('BS', 'Bachelor of Science'), ('IS', 'Information Systems');
INSERT INTO Student VALUES (11111, 'James', 'Peter', 'Male', '71717171', 'BS');
INSERT INTO Student VALUES (22222, 'Peter', 'Mark', 'Male', '71727172', 'IS');