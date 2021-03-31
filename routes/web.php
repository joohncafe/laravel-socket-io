<?php

use App\Models\User;
use Illuminate\Support\Str;
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
        'title' => "Um titulo bem legal teste " . Str::random(3) ,
        "body" => "Uma descrição bem legalzinha!" .  Str::random(7)
    ]);


    return 'ok';
});
