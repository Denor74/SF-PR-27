
<?php
session_start();

//Проверяем есть ли переменная, если нет - присваеваем пустое знаечение
$_SESSION['messagePassNo'] = $_SESSION['messagePassNo'] ?? '';
$_SESSION['messageLogin'] = $_SESSION['messageLogin'] ?? '';
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
    <title> Регистрация</title>
</head>
<body>

<h1>Регистрация и Авторизация | Практическая работа Модуль 27</h1>
    
    <section class="pd-4">
    <div class="bg-white border rounded-5">
    <section class="w-100 p-4 d-flex justify-content-center pb-4">
    
    <form  method="post" action="/app/signup.php">

      <!-- Ввод полного имени -->
      <div class="form-outline mb-4">
        <input type="text" placeholder="Введите имя" name="regNameFull" class="form-control" />
      </div>
      
      <div class="mb-4 text-danger">
        <?php 
        echo $_SESSION['messageLogin'];
        // Для сброса сообщения при обновлении страницы обнуляем значение переменной $_SESSION['messageLogin']
        unset ($_SESSION['messageLogin']);

         ?>
    </div>
      <!-- Ввод логина -->
      <div class="form-outline mb-4">
        <input type="text" placeholder="Введите логин" name="regLogin" class="form-control" />
      </div>

      <!-- Ввод Email -->
      <div class="form-outline mb-4">
        <input type="mail" placeholder="Введите почту" name="regMail" class="form-control" />
      </div>
    
      <!-- Вводим Password -->
      <div class="form-outline mb-4">
        <input type="password" placeholder="Введите пароль" name="regPassword" class="form-control" />
      </div>

      <div class="mb-4 text-danger">
        <?php 
        echo $_SESSION['messagePassNo'];
        // Для сброса сообщения при обновлении страницы обнуляем значение переменной $_SESSION['messagePassNoConfirm']
        unset ($_SESSION['messagePassNo']);

         ?>
    </div>
      <!-- Подтвердить Password -->
      <div class="form-outline mb-4">
        <input type="password" placeholder="Подтвердите пароль" name="regPasswordConfirm" class="form-control" />
      </div>

    
    
 
      <!-- Submit -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Регистрация</button>
    
      <!-- Register buttons -->
      <!-- <div class="text-center">
       <p>Уже есть учетная запись? <a href="index.php">Авторизируйтесь</a></p> 
        <p>Войдите через VK:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-vk"></i>
        </button> -->
    
      </div>
    </form>
    
    </section>
    </div>
    </section>
    
</body>
</html>