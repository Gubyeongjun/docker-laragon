<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BoardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', [
        'name' => 'ABC'
    ]);
});

Route::get('/naver', function () {
    return view('naver');
});

Route::get('/test', function () {
    return view('test');
});

// Route::get('/form', function () {
//     return view('form');
// });

Route::get('/form',[SearchController::class, 'form']);

// Route::get('/search', function (Request $request) {
//     $search = $request->input('search');
//     return view('search', [
//         'search' => $search
//     ]);
// });

Route::post('/search',[SearchController::class, 'store']);

Route::get('/search',[SearchController::class, 'search']);

//Route::get('/boards', function(){
//     return view('boards.index');
//});

// Route::get('/boards/create', function () {
    
//     return view('boards/create');
// });

Route::get('/boards', [BoardController::class, 'index']);
Route::get('/boards/create', [BoardController::class, 'create']);
Route::post('/boards', [BoardController::class, 'store']);
