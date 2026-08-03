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

use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/mau-thiep', [TemplateController::class, 'index']);
Route::get('/mau-thiep/{id}/edit', [TemplateController::class, 'edit']);
Route::get('/mau-thiep/{id}/preview', [TemplateController::class, 'preview']);
Route::post('/save-invitation', [TemplateController::class, 'save']);
Route::get('/thiep/{slug}', [TemplateController::class, 'show']);

Route::get('/login', function () {
    return view('auth.login');
});
