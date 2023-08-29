<?php
/*
************************************
Файл проверки авторизации
************************************
*/
// session_start();
// //Подключаемся к БД
// require_once 'connect.php';
include "load.php";

$login = $_POST['login'];
$password = $_POST['password'];
$tokenPost = $_POST['token'];

// Вводим переменную для логирования ошибок авторизации
$logAutError = date('Y-m-d H:i:s') . ' Неудачная попытка входа под логином: ' . $login;
// Путь для файла логирования
$fileAutError = __DIR__ . '/logs/logauterror.txt';

// Проверяем совпадает ли токен
if ($tokenPost == $_SESSION['CSRF']) {
// Формируем запрос к БД
$sql = "SELECT * FROM `users` WHERE `login` = '$login'";
$checkUser = mysqli_query($connect, $sql);

if (mysqli_num_rows($checkUser) > 0) {
    // получаем сведения о пользователе из БД
    $user = mysqli_fetch_assoc($checkUser);
    $_SESSION['user'] = [
        "fullName" => $user['fullname'],
        "login" => $user['login'],
        "password" => $user['password'],
        // роль пользователя
        "roleuser" => $user['role_user'],
        "rolevk" => $user['role_vk']
    ];

    if (password_verify($password, $_SESSION['user']['password'])) {
        //Пишем в сессию, что мы авторизовались
        $_SESSION['isauth'] = 'yes';
        //Пишем имя пользователя
        $username = $_SESSION['user']['fullName'];
        // Записываем роли пользователя
        $roleuser = $_SESSION['user']['roleuser'];
        $rolevk = $_SESSION['user']['rolevk'];
        
       
        header('Location: ../index.php');
    } else {
        // Пишем в сессию если пароль неверный
        $_SESSION['isauth'] = 'passno';
        // Пишем ошибку авторизации в лог файл
        file_put_contents($fileAutError, $logAutError . PHP_EOL, FILE_APPEND);
        header('Location: ../index.php');
    }
    


} else {$_SESSION['isauth'] = 'loginno';
    // Пишем ошибку авторизации в лог файл
    file_put_contents($fileAutError, $logAutError . PHP_EOL, FILE_APPEND);
    header('Location: ../index.php');
}

} else {
    echo '$tokenPost: ' . $tokenPost . '<br/>';
    echo '$token: ' . $token . '<br/>';

   echo 'токен не совпадает';
}

$auth = $_SESSION['isauth'] ?? null;
?>