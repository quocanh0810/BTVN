CREATE DATABASE quanlymathang;

CREATE TABLE mathang (
                          id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                          tenhang VARCHAR(50) NOT NULL,
                          nhasanxuat VARCHAR(50) NOT NULL,
                          tomtat VARCHAR(255),
                          giaban INT(15),
                          soluong INT(15)
);