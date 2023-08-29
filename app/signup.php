<?php
session_start();
//Подключаемся к БД
require_once 'connect.php';



$regNameFull = $_POST['regNameFull'];
$regLogin = $_POST['regLogin'];
$regMail = $_POST['regMail'];
$regPassword = $_POST['regPassword'];
$regPasswordConfirm = $_POST['regPasswordConfirm'];


// Проверяем совпадают ли пароли в поле пароль и подтвердить пароль
if ($regPassword !== $regPasswordConfirm) {

    // Выдаём сообщение, если пароли не совпадают
    $_SESSION['messagePassNo'] = 'Пароли не совпадают';
    header('Location: ../registration.php');
} else {
    // Хэшируем пароль
    $regPassword = password_hash($regPassword, PASSWORD_DEFAULT);

}

// Запрашиваем, есть ли в БД запись с указанным логином
$checkLogin = mysqli_query($connect, "SELECT `id` FROM `users` WHERE `login` = '$regLogin'");

// mysql_num_rows — Возвращает количество рядов результата запроса
if(mysqli_num_rows($checkLogin) == 0) {
     // Если в БД нет такого логина 
     // Записываем в БД данные регистрации
    $regSQL = "INSERT INTO `users` (`fullname`, `login`, `email`, `password`) VALUES ('$regNameFull', '$regLogin', '$regMail', '$regPassword')";
    mysqli_query($connect, $regSQL);
    $_SESSION['messageUserReg'] = $regNameFull . ', Поздравляем! Вы успешно зарегистрировались на сайте. <br/> Теперь Вы можете авторизоваться';
    
    // Перенаправляем на страницу авторизации
    header('Location: ../index.php');
} else {
    $_SESSION['messageLogin'] = 'Логин уже занят';
    header('Location: ../registration.php');
}


