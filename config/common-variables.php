
<?php


return [

     /*
    |--------------------------------------------------------------------------
    | SELLER CREDENTIAL
    |--------------------------------------------------------------------------
    */

    'user_credential' => [
        'first_name' => env('USER_FIRST_NAME'),
        'last_name' => env('USER_LAST_NAME'),
        'email' => env('USER_USER_EMAIL'),
        'phone' => env('USER_PHOME'),
        'password' => env('USER_PASSWORD'),
    ],

    '404_page' => env('404_PAGE','errors.404')
];
