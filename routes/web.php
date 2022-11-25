<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataKuliahController;


/*Route::get('/', function () {
    return view('main');
});*/

Route::get('/', [MataKuliahController::class, 'index']);
