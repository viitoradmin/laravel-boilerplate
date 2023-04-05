<?php

/**
 * Model-variables file contain all constant variables declaration of models which will be globally accessible.
 * Key of the table should be based on the table name (singular/plural)
 * Key of the Model class should be based on the class name (Always singular)
 */

use App\Modules\Backend\V1\Auth\Models\User;

return [
    /*
    * User Table and Model
    * @var array
    */
    'model' => [
        'user' => [
            'table' => 'users',
            'class' => User::class,
        ],
    ],
];
