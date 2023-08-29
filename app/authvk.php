<?php
//*********************************
// обработчик авторизации через VK
$client_id = 1111111; // ID приложения
$client_secret = 'ESlBJHmVMbeh8IVLiBDv'; // Защищённый ключ
$redirect_uri = 'http://mydomen/app/authvk.php'; // Адрес сайта

$url = 'http://oauth.vk.com/authorize'; // Ссылка для авторизации на стороне ВК

// Массив данных, который нужно передать для ВК содержит ИД приложения код, 
// ссылку для редиректа и запрос code для дальнейшей авторизации токеном

// Формируем ссылку для авторизации
$params = array(
	'client_id'     => $clientId,
	'redirect_uri'  => $redirectUri,
	'response_type' => 'code',
	'v'             => '5.126', // (обязательный параметр) версиb API https://vk.com/dev/versions
 
	// Права доступа приложения https://vk.com/dev/permissions
	// Если указать "offline", полученный access_token будет "вечным" (токен умрёт, если пользователь сменит свой пароль или удалит приложение).
	// Если не указать "offline", то полученный токен будет жить 12 часов.
	'scope'         => 'photos,offline',
);



?>