

<pre>
1. Создать пример гостевой книги.

Гостевую книгу описать без использования php-фреймворков, под стандарты PHP 7.2

Структура страницы:
Форма добавления записей в гостевую книгу по ajax-запросу.
Под формой вывести 5 последних записей из гостевой книги. Записи хранить в БД MySQL или SQLite.

По возможности стилизовать страницу через CSS (упрощенно).

Структура таблицы гостевой книги:

CREATE TABLE `guest_book` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`dtime` DATETIME NOT NULL,
`name` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
`body` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
PRIMARY KEY (`id`),
INDEX `dtime` (`dtime`)
) COLLATE='utf8_unicode_ci' ENGINE=InnoDB;

</pre>