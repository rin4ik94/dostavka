<?php return [
    'site_name' => 'Delivery',
    'delivery_price' => '5000',
    'status' => 0,
    'message' => 'Сайт находится на текущей реконструкции, после завершения всех работ сайт будет открыт. Приносим вам свои извинения за доставленные неудобства.',
    'click' => [
        'token' => 'qwerty',
    ],
    'sms' => [
        'login' => env('SMS_LOGIN', null),
        'password' => env('SMS_PASSWORD', null),
    ],
];
