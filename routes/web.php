<?php

use Illuminate\Support\Facades\Route;

Route::get('/myview2', function () {
    return view('html101');
});

Route::get('/view2', function(){
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'INDEX']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

Route::get('/workshop', [App\Http\Controllers\Workshop::class, 'index']);
Route::post('/workshop', [App\Http\Controllers\Workshop::class, 'store']);
