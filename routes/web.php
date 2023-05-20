<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SendmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { 
    return view('home.index');
})->name('home.index');

Route::get('/sobre-mim', function () { 
    return view('about.index');
})->name('about.index');

Route::get('/habilidades', function () { 
    return view('skills.index');
})->name('skills.index');

Route::get('/projetos', function () { 
    return view('portfolio.index');
})->name('portfolio.index');

Route::get('/contato', function () { 
    return view('contact.index');
})->name('contact.index');

Route::post('/enviar-email', [SendmailController::class, 'sendEmail'])->name('mail.send');

Route::get('/email-enviado', function () {
    return view('mail.email-sent');
})->name('mail.email-sent');
