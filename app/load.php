<?php
//=====================================================================================
//    Файлы и данные подгружаемые на страницы сайта
//=====================================================================================

session_start();

$patch = $_SERVER['HTTP_HOST'];
$auth = $_SESSION['isauth'] ?? null;
$username = $_SESSION['user']['fullName'] ?? null;
$roleuser = $_SESSION['user']['roleuser'] ?? null;
$rolevk = $_SESSION['user']['rolevk'] ?? null;


// генерируем одноразовый токен и прописываем его в сессию
// $token = hash('gost-crypto', random_int(0,999999));
// $_SESSION['CSRF'] = $token;

//$authErr = $_SESSION['authErr'] ?? null;


// Переменная для проверки правильности авторизации
//$authErr = $_SESSION['authErr']; 

include "sessionend.php";
include "connect.php";
//include "log.php";

