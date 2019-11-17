CREATE USER 'user_logodom'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password_logodom';
GRANT ALL PRIVILEGES ON *.* TO 'user_logodom'@'localhost' WITH GRANT OPTION;
-- CREATE USER 'user_logodom'@'%' IDENTIFIED WITH mysql_native_password BY 'password_logodom';
ALTER USER 'user_logodom'@'%' IDENTIFIED WITH mysql_native_password  BY 'password_logodom';
GRANT ALL PRIVILEGES ON *.* TO 'user_logodom'@'%' WITH GRANT OPTION;
#
CREATE DATABASE IF NOT EXISTS `yourdb` COLLATE 'utf8_general_ci' ;
GRANT ALL ON `password_logodom`.* TO 'user_logodom'@'%' ;
FLUSH PRIVILEGES ;