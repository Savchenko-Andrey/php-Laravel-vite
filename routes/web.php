<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/', function () {
    $users = [
        (object)[
            'name' => 'Іван Петренко',
            'email' => 'ivan@example.com',
        ],
        (object)[
            'name' => 'Олена Ковальчук',
            'email' => 'olena@example.com',
        ],
        (object)[
            'name' => 'Сергій Мельник',
            'email' => 'sergiy@example.com',
        ],
        (object)[
            'name' => 'Марія Шевченко',
            'email' => 'maria@example.com',
        ],
        (object)[
            'name' => 'Андрій Сидоренко',
            'email' => 'andrii@example.com',
        ],
    ];

    return view('home', [
        'users' => $users
    ]);
});
