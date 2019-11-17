<?php

return [
    require_once(__DIR__ . '/../config/functions.php'),
    'frontendUrl' => '',        // домен фронтенда, например http://example.ru, если не указан попробует найти автоматически
    //    'adminEmail' => 'relacsi@yandex.ru',
//    'adminEmail' => 'relacsi@yandex.by',
    'adminEmail' => 'volhakorsakova@gmail.com',
    'supportEmail' => 'phpnt@yandex.ru',
    'user.passwordResetTokenExpire' => 3600,
];
