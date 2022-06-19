
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


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
Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function(){

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/show',[AdminController::class,'index'])->name('index');
    Route::get('/create',[AdminController::class,'create'])->name('create');
    Route::post('/store',[AdminController::class,'store'])->name('store');
});


require __DIR__.'/auth.php';
require __DIR__.'/supervisor.php';
