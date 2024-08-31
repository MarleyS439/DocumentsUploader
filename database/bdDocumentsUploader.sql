CREATE DATABASE IF NOT EXISTS bdDocumentsUploader;

--USE DATABASE bdDocumentsUploader;

/* brModelo: User */
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
    phoneNumberUser VARCHAR(20)
);


