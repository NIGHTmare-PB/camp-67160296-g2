<?php

use Illuminate\Support\Facades\Route;

Route::get('/myview2', function () {
    return view('template.html101');
});

Route::get('/view2', function(){
    return view('template.myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'INDEX']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

Route::get('/', [App\Http\Controllers\Workshop::class, 'index']);
Route::post('/', [App\Http\Controllers\Workshop::class, 'store']);



Route::resource('/flights', App\Http\Controllers\FlightController::class);


Route::resource('/pokedexs', App\Http\Controllers\PokedexController::class);
