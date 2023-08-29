<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    <title> Регистрация</title>
</head>
<body>

<h1>Регистрация и Авторизация | Практическая работа Модуль 27</h1>
    
    <!-- <section class="pd-4">
    <div class="bg-white border rounded-5">
    <section class="w-100 p-4 d-flex justify-content-center pb-4"> -->
    
    <form  method="post" action="/app/signup.php">
      <!-- Name input -->

        <input type="text" placeholder="Введите имя" name="regName" class="form-control" />


      <!-- Email input -->

        <input type="mail" placeholder="Введите почту" name="regMail" class="form-control" />

    
      <!-- Password input -->

        <input type="password" placeholder="Введите пароль" name="regPassword" class="form-control" />


        <input type="password" placeholder="Подтвердите пароль" name="regPasswordConfirm" class="form-control" />

    
    
 
      <!-- Submit button -->
      <button type="supmit">Регистрация</button>
    
      <!-- Register buttons -->
      <!-- <div class="text-center">
       <p>Уже есть учетная запись? <a href="index.php">Авторизируйтесь</a></p> 
        <p>Войдите через VK:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-vk"></i>
        </button> -->
    

    </form>
    

</body>
</html>