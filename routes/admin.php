<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeGroupController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChangepwController;
use App\Http\Controllers\Admin\ContactDetailsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OtherSettingController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PrivacypolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariationController;
use App\Http\Controllers\Admin\SecondBannerController;
use App\Http\Controllers\Admin\TermsController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::resource('category', CategoryController::class);
Route::resource('attributegroup', AttributeGroupController::class);
Route::resource('attribute', AttributeController::class);
Route::resource('product', ProductController::class);

Route::get('login', [LoginController::class, 'index'])->name('admin.login');
Route::post('login', [LoginController::class, 'login'])->name('admin.login.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('blogs', BlogController::class);
Route::resource('faq', FaqController::class);
Route::get('/changepassword', [ChangepwController::class, 'changepassword'])->name('changepassword');
Route::post('/changepassword', [ChangepwController::class, 'updatepassword'])->name('admin.password.update');

Route::resource('banner', BannerController::class);
Route::resource('secondbanner', SecondBannerController::class);

Route::resource('privacy-policy', PrivacypolicyController::class);
Route::resource('termsandcondition', TermsController::class);
Route::resource('other-pages', PagesController::class);

//ajax
Route::get('/fetchAg/{cid}', [AttributeController::class, 'fetchAttributeGroup'])->name('fetch.attribute.group');
Route::post('/save', [ProductVariationController::class, 'saveVariations'])->name('save.variants');
Route::post('/update/variations/{id}', [ProductVariationController::class, 'updateVariations'])->name('update.variants');

Route::get('order', [OrderController::class, 'getorder'])->name('getorder')->middleware("admin");
Route::get('order/details/{details}', [OrderController::class, 'orderdetails'])->name('order.details')->middleware("admin");
Route::delete('orderdelete/{orderdelete}', [OrderController::class, 'deleteorderdetails'])->name('order.destroy')->middleware("admin");
Route::post('orderstatus/{orderstatus}', [OrderController::class, 'change_status'])->name('order.changestatus')->middleware("admin");

Route::get('/setting', [OtherSettingController::class, 'setting'])->name('admin.setting');
Route::post('/settingdetails', [OtherSettingController::class, 'settingdetails'])->name('settingdetails');
Route::post('/deliverycharge', [OtherSettingController::class, 'deliverycharge'])->name('deliverycharge');
Route::get('/users', [UserController::class, 'index'])->name('admin.users');

Route::resource('/aboutadmin', AboutController::class);
Route::resource('/contactadmin', ContactDetailsController::class);
Route::resource('/mega-menu', ContactDetailsController::class);
