# Simple-MVC-Guestbook
Тестовое задание по написанию простой гостевой книги без использования фреймворков. В качестве упрощения отсутствует функционал авторизации и аутентификации.

В процессе разработки использовано :<br> 
<b>Ubuntu 19.10 с php7</b><br>
<b>Apache2</b><br>
<b>Mariadb 10.4.11</b><br>
<b>В apache2 должна быть включена поддержа файлов .htaccess и mod rewrite</b>


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

