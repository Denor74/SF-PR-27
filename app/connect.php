<?php
// Подключаемся к БД, в случае неудачи выводим соьщение и останавливаем скрипт
    $connect = mysqli_connect('localhost', 'root', '', 'sf-pr-27');

    if (!$connect) {
        die('Ошибка при подключении к БД');
    } 

    