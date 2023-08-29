<?php
include "app/load.php";
if (!$roleuser) {
    header('Location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Регистрация и Авторизация | Практическая работа Модуль 27</title>
</head>
<body>
    <h1>Регистрация и Авторизация | Практическая работа Модуль 27</h1>
    <p class="text-center fs-4 text-danger"><a href="/index.php" class="">Перейти на главную страницу</a></p>
<section class="pd-4">
<div class="bg-white border ">
<section class="w-100 p-4 justify-content-center pb-4">
<p class="text-center fs-3 text-danger">Страница для авторизованных пользователей</p>

<?php 
if($rolevk) { ?>
<p class="text-center fs-3">Картинка доступна только пользователям VK</p>
<p class="text-center" ><img src="/img/vk.png" alt="Только для зарегистрированных через VK" width="200px"></p>

<?php } ?>

</section>
</div>
</section>
    
</body>
</html>