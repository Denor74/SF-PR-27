<?php
include "app/load.php";
include "app/token.php";
//session_start();

// echo '$roleuser ';
// var_dump($roleuser);
// print_r($_SESSION['user']);
//Проверяем есть ли переменная, если нет - присваеваем пустое знаечение
$_SESSION['messageUserReg'] = $_SESSION['messageUserReg'] ?? '';
//$_SESSION['isauth'] = $_SESSION['isauth'] ?? '';

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
    <p class="text-center fs-4 text-danger"><a href="/content.php" class="">Перейти на закрытую страницу</a></p>
    <?php 
    if ($_SESSION['messageUserReg']) {
      echo '<p class="text-center fs-3">' . $_SESSION['messageUserReg'] . '</p>';
    }
// Выводим сообщение, если пароль или логин не верны
    if ($auth === 'loginno' || $auth === 'passno') {
      
      echo '<p class="text-center fs-3 text-danger">Пароль или логин не верны</p>';
    } if ($auth === 'yes') {
      echo '<p class="text-center fs-3 text-danger">Вы автоизовались как ' . $username . ' <a href="/index.php?endSession=true">Выйти</a></p>';
    }
    ?>
<section class="pd-4">
<div class="bg-white border rounded-5">
<section class="w-100 p-4 d-flex justify-content-center pb-4">
<?php
   // если пользователь не авторизован выводим форму авторизации
    if ($auth !== 'yes') { ?>
<form method="post" action="app/authorization.php">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" placeholder="Введите Login" name="login" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" placeholder="Введите пароль" name="password" class="form-control" />
  </div>

  <!-- Скрытое поле куда прописываем одноразовый токен CSRF -->
    <div class="form-outline mb-4">
      <input type="hidden" name="token" value="<?=$token?>">
    </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" checked />
        <label class="form-check-label" for="form2Example31"> Запомнить меня </label>
      </div>
    </div>

 </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Войти</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Нет учетной записи? <a href="registration.php">Зарегистрируйтесь</a></p>
    <p>Войдите через VK:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

  </div>
</form>
<?php } else {
  // Если пользователь автризован выводим ссылку на фацл обнуления значений сессии
  echo '<p class="text-center fs-4">Для выхода </p>';
} ?>
</section>
</div>
</section>
    
</body>
</html>