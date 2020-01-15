# Simple-MVC-Guestbook
Тестовое задание по написанию простой гостевой книги без использования фреймворков. В качестве упрощения отсутствует функционал авторизации и аутентификации.

В процессе разработки использовано : 
ubuntu 19.10 с php7
apache2
mariadb 10.4.11
в apache2 должна быть включена поддержа файлов .htaccess и mod rewrite


Структура таблицы гостевой книги:

CREATE TABLE `guest_book` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`dtime` DATETIME NOT NULL,
`name` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
`body` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
PRIMARY KEY (`id`),
INDEX `dtime` (`dtime`)
) COLLATE='utf8_unicode_ci' ENGINE=InnoDB;


Настройки mysql:

db = 'test';
user = 'test';
password = 'Hq3bCIUsMxSPNRCD';


# simple-mvc-guest-book

