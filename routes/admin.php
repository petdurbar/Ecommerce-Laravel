<?php

use App\Http\Controllers\Admin\AttributesController;
use App\Http\Controllers\Admin\AttributesGroupController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, "index"])->name('admin.login');

Route::post('login', [AuthController::class, 'login'])->name('admin.login.store');

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware("admin");

Route::get('/changepassword', [AuthController::class, 'changePassword'])->name('admin.changepassword')->middleware('admin');

Route::post('/changepassword', [AuthController::class, 'updatePassword'])->name('admin.updatepassword')->middleware('admin');

Route::get('dashboard', [DashboardController::class, "dashboard"])->name('admin.dashboard')->middleware("admin");


Route::resource('blogs', BlogController::class);

Route::resource('banner', BannerController::class);

Route::resource('category', CategoryController::class);

Route::resource('product', ProductController::class);

Route::resource('attributegroups', AttributesGroupController::class);

Route::post('attribute', [AttributesController::class, "AttributesController"])->name('filterattributegroup')->middleware("admin");

Route::resource('attributes', AttributesController::class);




Route::resource('company', CompanyController::class);


Route::get('productimage/{product}', [ProductController::class, 'imagecreate'])->name('myimage')->middleware("admin");
Route::post('productimage/{product_id}', [ProductController::class, 'productImage'])->name('productImage')->middleware("admin");
Route::delete('productimage/{img}', [ProductController::class, 'deleteImage'])->name('deleteImage')->middleware("admin");

Route::get('order', [OrderController::class, 'getorder'])->name('getorder')->middleware("admin");
Route::get('order/details/{details}', [OrderController::class, 'orderdetails'])->name('order.details')->middleware("admin");

Route::post('orderstatus/{orderstatus}', [OrderController::class, 'change_status'])->name('order.changestatus')->middleware("admin");


// affilate user
Route::get('affilateusers', [ManageUserController::class, 'affilateusers'])->name('affilateusers')->middleware("admin");
Route::get('affilateusers/{affilateusers:slug}', [ManageUserController::class, 'viewaffilate'])->name('viewaffilate')->middleware("admin");

Route::post('/verfied/{affilateuser}', [ManageUserController::class, 'verify'])->name('user.verify');
Route::post('/reject/{affilateuser}', [ManageUserController::class, 'reject'])->name('user.reject');
