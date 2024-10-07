<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return redirect('/items');
});
Route::resource('items', ItemController::class)->names([
    'index' => 'items.index',
    'create' => 'items.create',
    'store' => 'items.store',
    'show' => 'items.show',
    'edit' => 'items.edit',
    'update' => 'items.update',
    'destroy' => 'items.destroy',
]);