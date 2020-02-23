<?php

Route::get('me', static function() {
    return [
        'name' => 'John doe'
    ];
});


Route::apiResource('/article', 'ArticlesController');
Route::apiResource('/user', 'UserController');


