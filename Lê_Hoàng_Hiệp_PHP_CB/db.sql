CREATE DATABASE shop;

CREATE TABLE quanlymathang (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      ten VARCHAR (255) NOT NULL,
      nsx VARCHAR (255) NOT NULL,
      nd VARCHAR (255) NOT NULL ,
      gia VARCHAR (255) NOT NULL ,
      soluong VARCHAR (255) NOT NULL ,
);

CREATE TABLE account (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR (255) NOT NULL,
      password VARCHAR (255) NOT NULL,
);