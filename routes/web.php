<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Menu\CategoryController;

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

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        //Phương thức này prefix có thể được sử dụng để thêm tiền tố cho mỗi tuyến đường trong nhóm bằng một URI nhất định.
        //Ví dụ: bạn có thể muốn thêm tiền tố vào tất cả các URI tuyến đường trong nhóm bằng admin:
        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('main',[MainController::class,'index']);

        #category
        Route::prefix('category')->group(function () {
            Route::get('add',[CategoryController::class,'create']);
        });
    });

});
