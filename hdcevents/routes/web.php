<?php

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contact', function () {
    return view('contacts');
});

Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/products/{id}', function($id){
    return view('product', ['id' => $id]);
});