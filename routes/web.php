<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/todos');
});

Route::resource('todos', TodoController::class);
