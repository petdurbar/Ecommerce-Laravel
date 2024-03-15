<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\ForgetPassword;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'Migration has been successfully';
});
Route::redirect('/', '/home');
Route::get('/home', [IndexController::class, 'index'])->name('index');
Route::get('/category', [IndexController::class, 'category'])->name('category');
Route::get('/category/{category:slug}', [IndexController::class, 'categoryproducts'])->name('category-products');
Route::get('/usedPhone/{category:slug}', [IndexController::class, 'usedPhone'])->name('used-products');
Route::get('/latestProduct/{category:slug}', [IndexController::class, 'latestProduct'])->name('latest-products');

// Route::get('/category/{name}', [IndexController::class, 'allproducts'])->name('products');
Route::get('/search', [ProductController::class, 'search'])->name('product.search');

Route::get('/product/{product:slug}', [IndexController::class, 'productdetails'])->name('productdetails');

Route::get('/about-us', [IndexController::class, 'aboutus'])->name('about-us');
Route::get('/laptops', [IndexController::class, 'laptop'])->name('laptops');


Route::resource('contact', ContactController::class);

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/faq', [IndexController::class, 'faq'])->name('faq');

Route::get('/privacy-policy', [IndexController::class, 'privacypolicy'])->name('privacy');
Route::get('/termsandcondition', [IndexController::class, 'termsandcondition'])->name('termsandcondition');
Route::get('/location', [IndexController::class, 'location'])->name('location');

Route::get('/product', [ProductController::class, 'product'])->name('product');

// Route::get('/login', [CustomerController::class, 'login'])->name('user.login');
Route::post('/register', [CustomerController::class, 'register'])->name('user.register');
Route::get('/register', [CustomerController::class, 'getregister'])->name('register');
Route::post('/login', [CustomerController::class, 'login'])->name('user.login');
Route::post('/logout', [CustomerController::class, 'logout'])->name('user.logout');
Route::get('/login', [CustomerController::class, 'getlogin'])->name('login');

Route::get('auth/google', [CustomerController::class, 'redirect'])->name('google-auth');
Route::get('login/google/callback', [CustomerController::class, 'callbackGoogle']);

Route::get('/myaccount', [DashboardController::class, 'myaccount'])->name('myaccount');
// Route::get('/order/{id}', [DashboardController::class, 'order'])->name('order');
Route::get('order/details/{details}', [DashboardController::class, 'orderdetails'])->name('order.details');


Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');

// blog
Route::get('/blogs', [IndexController::class, 'getblog'])->name('blog');
Route::get('/search/blog', [IndexController::class, 'searchblog'])->name('searchblog');
Route::get('/blog/{blog:slug}', [IndexController::class, 'single'])->name('single');

// FORGET PASSWORD
Route::get('/forgetpassword', [ForgetPassword::class, 'index'])->name('forgetpassword');
Route::post('/forgetpasswords', [ForgetPassword::class, 'store'])->name('forgetpasswords');
Route::get('/otp', [ForgetPassword::class, 'otp'])->name('otp');
Route::post('/checkotp', [ForgetPassword::class, 'checkotp'])->name('checkotp');
Route::get('/newpassword', [ForgetPassword::class, 'newpassword'])->name('newpassword');
Route::post('/changepassword', [ForgetPassword::class, 'changepassword'])->name('changepasswords');

Route::post('/checkprice', [ProductController::class, 'checkprice'])->name('price.check');
Route::get('/productdetailss', [IndexController::class, 'productdetailss'])->name('productdetailss');

// add to cart
Route::post('addincart', [CartController::class, 'storecart'])->name('cart.store');
Route::get('/addCart/{product}', [CartController::class, 'addCart'])->name('addCart');
Route::get('/getcartdata', [CartController::class, 'getCart'])->name('getCart');
Route::get('/countAdd/{product}', [CartController::class, 'addCount'])->name('addCount');
Route::get('/subCount/{product}', [CartController::class, 'subCount'])->name('subCount');
Route::get('/clearallcart', [CartController::class, 'removeCart'])->name('remove.cart');
Route::get('/clearcart/{product}', [CartController::class, 'removeSingleCart'])->name('remove.single.cart');
Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
Route::get('/wishlist/add/{productId}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::delete('wishlist/{id}', [WishlistController::class, 'deletewishlist'])->name('wishlist.destroy');

//checkout
// Route::get('/checkout', [IndexController::class, 'checkout']);
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('/checkoutpay', [CheckoutController::class, 'checkout'])->name('checkoutpay');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/thankyou', [CheckoutController::class, 'thanks'])->name('thanks');


Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Application all kind of cache has been cleared';
});
