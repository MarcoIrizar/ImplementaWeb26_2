<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\OpinionController;
=======
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190

Route::get('/', function () {
    return view('presentacion');
});
<<<<<<< HEAD

Route::get('/caracteristicas', function () {
    return view('caracteristicas');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/ubicacion', function () {
    return view('ubicacion');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::post('/guardarOpinion', [OpinionController::class, 'guardarOpinion']);
=======
>>>>>>> fd817f8cb92629bca7de6db4f379a41140b0a190
