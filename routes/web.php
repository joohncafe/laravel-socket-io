<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/create-post', function () {
    $user = User::first();

    $user->posts()->create([
        'title' => "Um titulo bem legal teste",
        "body" => "Uma descrição bem legalzinha!"
    ]);


    return 'ok';
});
