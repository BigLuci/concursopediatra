<?php

use Illuminate\Support\Facades\Route;

//admin routes

Route::get('/recrutamento', function () {
    return view('website.home');
})->middleware(['auth'])->name('site.home');

Route::get('/listagem', 'App\Http\Controllers\CandidatoController@lista')->middleware(['auth'])->name('site.listagem');

Route::get('/listagem/json', 'App\Http\Controllers\CandidatoController@listaJson')->middleware(['auth']);

Route::get('/listagem/{id}', 'App\Http\Controllers\CandidatoController@show')->middleware(['auth'])->name('site.dados_candidato');

Route::get('exclui', 'App\Http\Controllers\CandidatoController@exclui')->middleware(['auth'])->name('site.exclui');

Route::get('cadastro/remove/{id}', 'App\Http\Controllers\CandidatoController@remove')->middleware(['auth']);

//candidate routes

Route::get('/home', function () {
    return view('website.home_candidato');
})->name('site.home_candidato');

Route::get('/', function () {
    return view('website.home_candidato');
})->name('site.home_candidato');

Route::get('/inscricao', 'App\Http\Controllers\CandidatoController@inscricao')->name('site.inscricao');

Route::post('/inscricao/adiciona', 'App\Http\Controllers\CandidatoController@adiciona')->name('site.adiciona');

//additional routes

require __DIR__.'/auth.php';