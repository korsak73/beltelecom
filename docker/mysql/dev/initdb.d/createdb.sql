CREATE USER 'user_beltelecom'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password_beltelecom';
GRANT ALL PRIVILEGES ON *.* TO 'user_beltelecom'@'localhost' WITH GRANT OPTION;
-- CREATE USER 'user_beltelecom'@'%' IDENTIFIED WITH mysql_native_password BY 'password_beltelecom';
ALTER USER 'user_beltelecom'@'%' IDENTIFIED WITH mysql_native_password  BY 'password_beltelecom';
GRANT ALL PRIVILEGES ON *.* TO 'user_beltelecom'@'%' WITH GRANT OPTION;
#
CREATE DATABASE IF NOT EXISTS `yourdb` COLLATE 'utf8_general_ci' ;
GRANT ALL ON `password_beltelecom`.* TO 'user_beltelecom'@'%' ;
FLUSH PRIVILEGES ;