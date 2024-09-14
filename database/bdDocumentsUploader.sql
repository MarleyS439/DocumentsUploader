CREATE DATABASE IF NOT EXISTS bdDocumentsUploader;
USE DATABASE bdDocumentsUploader;

/* User */
CREATE TABLE tbUser (
    idUser INTEGER AUTO_INCREMENT PRIMARY KEY,
    fullNameUser VARCHAR(80),
    sexUser CHAR(1),
    birthdayUser DATE,
    cpfUser CHAR(11),
    rgUser VARCHAR(15),
    ufRgUser CHAR(2),
    nacionalityUser VARCHAR(30),
    naturalnessUser VARCHAR(30),
    fullMotherNameUser VARCHAR(80),
    fullfatherNameUser VARCHAR(80),
    maritalStatusUser VARCHAR(11),
    schoolingUser VARCHAR(50),
    emailUser VARCHAR(50),
    phoneNumberUser VARCHAR(20),
    --Unique values
    UNIQUE (cpfUser, emailUser)
);

/* Admin */
CREATE TABLE tbAdmin (
    idAdmin INTEGER AUTO_INCREMENT PRIMARY KEY,
    nameAdmin VARCHAR(20),
    emailAdmin VARCHAR(50)
);

/* Documents */
CREATE TABLE tbDocument (
    idDocument INTEGER AUTO_INCREMENT PRIMARY KEY,
    nameDocument VARCHAR,
    typeDocument VARCHAR,
    dateUploadDocument DATE,
    notesDocument VARCHAR,
    FOREIGN KEY (idUser) REFERENCES tbUser(idUser) ON DELETE SET NULL
);

/* Analysis */
CREATE TABLE tbAnalysis (
    idAnalysis INTEGER PRIMARY KEY,
    idUser INTEGER,
    idDocument INTEGER,
    statusAnalysis CHAR,
    notesAnalysis VARCHAR,
    FOREIGN KEY (idAdmin) REFERENCES tbAdmin(idAdmin) ON DELETE SET NULL
);
