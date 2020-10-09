DROP DATABASE IF EXISTS apicidb;
CREATE DATABASE IF NOT EXISTS apicidb;
USE apicidb;

CREATE TABLE clientes (
    id int(11) NOT NULL AUTO_INCREMENT,
    nombre varchar(100) NOT NULL,
    email varchar(255) NOT NULL,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
  
INSERT INTO `clientes` (`id`, `nombre`, `email`) VALUES
(1, 'John Doe', 'john@gmail.com'),
(2, 'Vanya Hargreeves', 'vanya@gmail.com'),
(3, 'Luther Hargreeves', 'luther@gmail.com'),
(4, 'Diego Hargreeves', 'diego@gmail.com'),
(5, 'Klaus Hargreeves', 'klaus@gmail.com'),
(6, 'Ben Hargreeves', 'ben@gmail.com'),
(7, 'The Handler', 'handler@gmail.com');