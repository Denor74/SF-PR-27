<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\HtmlFormatter;

// Создаем логгер 
$log = new Logger('logger27');

// Хендлер, который будет писать логи в "mylog.log" и слушать все ошибки с уровнем "WARNING" и выше .
$log->pushHandler(new StreamHandler(__DIR__.'/logs/mylog.log', Logger::WARNING));



// Добавляем записи
$log->warning('Предупреждение' );

?>