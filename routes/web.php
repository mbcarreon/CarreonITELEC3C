<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::all();
        return view('dashboard', compact('users'));
    })->name('dashboard');
});

Route::get('/category', [CategoryController::class, 'show']);

Route::get('/user/{id}', function ($id) {
    $user = App\Models\User::where('id', '=', $id)->firstOrFail();

    return view('user.show', compact('user'));
});

Route::get('/category/{id}', function ($id) {
    $item = App\Models\Category::where('id', '=', $id)->firstOrFail();

    return view('category.show', compact('item'));
});

Route::get('/create-category', [CategoryController::class, 'create']);
Route::post('/save-category', [CategoryController::class, 'save']);