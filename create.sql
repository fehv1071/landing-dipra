CREATE TABLE landing_reg(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name varchar(60),
mail varchar(60),
phone varchar(60),
state varchar(60),
city  varchar(60),
date_registration DateTime,
downloaded ENUM('0', '1') NOT NULL  DEFAULT '0', 
date_downloaded DateTime,
subscribed ENUM('0', '1') NOT NULL  DEFAULT '0', 
subscribed_date DateTime,
);