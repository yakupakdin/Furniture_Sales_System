<?php

use Illuminate\Support\Facades\Route;
Route::get('/', [\App\Http\Controllers\indexHomeController::class, 'index'])->name('index');
Route::get('/aboutus', [\App\Http\Controllers\indexHomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [\App\Http\Controllers\indexHomeController::class, 'contact'])->name('contact');


Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/userRegister', [\App\Http\Controllers\LoginController::class, 'userRegister'])->name('userRegister');

Route::prefix('admin')->middleware('admincontrol')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminMainController::class, 'adminMain'])->name('admin');
    Route::get('/aboutus', [\App\Http\Controllers\AdminMainController::class, 'aboutUs'])->name('adminaboutUs');
    Route::get('/contact', [\App\Http\Controllers\AdminMainController::class, 'contact'])->name('adminContact');
    Route::get('/admindetail', [\App\Http\Controllers\AdminMainController::class, 'admindetail'])->name('admindetail');
    Route::get('/adminupdate', [\App\Http\Controllers\AdminMainController::class, 'adminUpdate'])->name('adminupdate');
    Route::post('/adminUpgrade', [\App\Http\Controllers\AdminMainController::class, 'adminUpgrade'])->name('adminUpgrade');
    Route::get('/userdetail', [\App\Http\Controllers\AdminMainController::class, 'userdetail'])->name('userdetail');
    Route::get('/userDelete', [\App\Http\Controllers\AdminMainController::class, 'userDelete'])->name('userDelete');
    Route::get('/userUpdate', [\App\Http\Controllers\AdminMainController::class, 'userUpdate'])->name('userUpdate');
    Route::post('/userUpgrade', [\App\Http\Controllers\AdminMainController::class, 'userUpgrade'])->name('userUpgrade');
    Route::get('/aktifyap', [\App\Http\Controllers\AdminMainController::class, 'aktifyap'])->name('aktifyap');
    Route::get('/pasifyap', [\App\Http\Controllers\AdminMainController::class, 'pasifyap'])->name('pasifyap');
    Route::post('/orderstatu', [\App\Http\Controllers\AdminMainController::class, 'orderstatu'])->name('orderstatu');

    Route::get('/itemDetails', [\App\Http\Controllers\AdminMainController::class, 'itemDetails'])->name('itemDetails');
    Route::get('/itemUpdate', [\App\Http\Controllers\AdminMainController::class, 'itemUpdate'])->name('itemUpdate');
    Route::post('/itemUpgrade', [\App\Http\Controllers\AdminMainController::class, 'itemUpgrade'])->name('itemUpgrade');
    Route::post('/itemAdd', [\App\Http\Controllers\AdminMainController::class, 'itemAdd'])->name('itemAdd');
    Route::get('/itemDelete', [\App\Http\Controllers\AdminMainController::class, 'itemDelete'])->name('itemDelete');
    Route::get('/itemaktifyap', [\App\Http\Controllers\AdminMainController::class, 'itemaktifyap'])->name('itemaktifyap');
    Route::get('/itempasifyap', [\App\Http\Controllers\AdminMainController::class, 'itempasifyap'])->name('itempasifyap');


});
Route::prefix('users')->middleware('users')->group(function () {
    Route::get('/', [\App\Http\Controllers\UsersMainController::class, 'usersMain'])->name('users');
    Route::get('/aboutus', [\App\Http\Controllers\UsersMainController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/contact', [\App\Http\Controllers\UsersMainController::class, 'contact'])->name('userContact');
    Route::get('/itemDetail', [\App\Http\Controllers\UsersMainController::class, 'itemDetail'])->name('itemDetail');
    Route::get('/usersDetail', [\App\Http\Controllers\UsersMainController::class, 'usersDetail'])->name('usersDetail');
    Route::get('/usersUpdate', [\App\Http\Controllers\UsersMainController::class, 'usersUpdate'])->name('usersUpdate');
    Route::post('/usersUpgrade', [\App\Http\Controllers\UsersMainController::class, 'usersUpgrade'])->name('usersUpgrade');

});



Route::post('/logincontrol', [\App\Http\Controllers\LoginController::class,'loginControl'])->name('logincontrol');
Route::get('/logout', [\App\Http\Controllers\LogoutAll::class,'logoutAll'])->name('logout');
