<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\AffilateController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontendAuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortalController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
//     return redirect('/blogs');
// });

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/login', [FrontendAuthController::class, 'loginpage'])->name('login');

Route::post('/logout', [FrontendAuthController::class,'logout'])->name('front.logout');

Route::post('/login', [FrontendAuthController::class, 'login'])->name('user.login');

Route::get('/register', [FrontendAuthController::class, 'register'])->name('register');

Route::post('/register', [FrontendAuthController::class, 'store'])->name('user.store');

Route::get('/blogs', [HomeController::class, 'getblog'])->name('blog');

Route::get('/search/blog', [HomeController::class, 'searchblog'])->name('searchblog');

Route::get('/blog/{blog:slug}', [HomeController::class, 'single'])->name('single');

Route::get('/product/{product:slug}', [HomeController::class, 'singlepage'])->name('product.singlepage');

Route::get('cart', [CartController::class, 'cart'])->name('cart');

Route::get('/migrate', function () {
    Artisan::call('migrate:fresh --seed');
    return redirect()->route("homepage")->with('success', 'Migrate Successfull');
});
// Route::get('cart/count', [HomeController::class, 'cartcount'])->name('cartcount');

// Route::get('cart/data', [HomeController::class, 'cartdata'])->name('cartdata');

// Route::post('addCart', [HomeController::class, 'storecart'])->name('cart.store');

// Route::post('cart/{cartid}', [HomeController::class, 'addquantity'])->name('cart.addquantity');

// Route::post('carts/{cartid}', [HomeController::class, 'deletequantity'])->name('cart.deletequantity');


Route::post('removecart/{cartid}', [HomeController::class, 'removefromcart'])->name('removefromcart');

Route::get('services', [HomeController::class, 'services'])->name('services');

Route::get('onlineprograms', [HomeController::class, 'onlineprograms'])->name('onlineprograms');

Route::get('/newarrival', [HomeController::class, 'latestproduct'])->name('latestproduct');

Route::get('popularproducts', [HomeController::class, 'popularproducts'])->name('popularproducts');

Route::get('/shop', [HomeController::class, 'products'])->name('allproducts');

Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist')->middleware("user");

Route::get('/addwishlist/{product}', [HomeController::class, 'addwishlist'])->name('addwishlist');

Route::get('/removewishlist/{product}', [HomeController::class, 'removewishlist'])->name('removewishlist');

Route::get('/affilate', [HomeController::class, 'affilate'])->name('affilate');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::post('/checkoutpay', [HomeController::class, 'checkoutpay'])->name('checkoutpay');


Route::get('/category/{category:slug}', [HomeController::class, 'categorysearch'])->name('categorysearch');

Route::get('/affilateform', [HomeController::class, 'affilateform'])->name('affilateform')->middleware("user");

Route::get('/termsandcondition', [HomeController::class, 'termsandcondition'])->name('termsandcondition');
Route::get('/privacypolicy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');

Route::get('/autocomplete', [HomeController::class, 'autocomplete'])->name('autocomplete');

Route::get('/search', [HomeController::class, 'productsearch'])->name('productsearch');

Route::get('/products', [HomeController::class, 'filtersearch'])->name('filtersearch');

// Route::get('/products', [HomeCont roller::class, 'products'])->name('allproducts');

// Route::post('product/add-to-cart', [HomeController::class, 'addToCart'])->name('addToCart');


// cart
Route::get('/addCart/{product}', [CartController::class, 'addCart'])->name('addCart');
Route::get('/getcartdata', [CartController::class, 'getCart'])->name('getCart');
Route::get('/countAdd/{product}', [CartController::class, 'addCount'])->name('addCount');
Route::get('/subCount/{product}', [CartController::class, 'subCount'])->name('subCount');
Route::get('/clearallcart', [CartController::class, 'removeCart'])->name('remove.cart');
Route::get('/clearcart/{product}', [CartController::class, 'removeSingleCart'])->name('remove.single.cart');

Route::post('addincart', [CartController::class, 'storecart'])->name('cart.store');




// portal
Route::get('/portal/dashboard', [DashboardController::class, 'index'])->name('portal.dashboard')->middleware("user");

Route::get('track-order', [DashboardController::class, 'getorder'])->name('user.tracker');

Route::group(['middleware' => 'user'], function () {

    Route::post('portal/user-update/{userid}', [DashboardController::class, 'update_address'])->name('user.updates');
    Route::post('portal/user-update-password/{userid}', [DashboardController::class, 'changePassword'])->name('user.passwordchange');
    Route::post('portal/user-address-update/{userid}', [DashboardController::class, 'update_delivery_address'])->name('userDeliveryAddressUpdate');


    Route::get('portal/viewcommission/{viewcommission}', [DashboardController::class, 'viewaffilatecommission'])->name('user.affilatecommission');

    Route::get('portal/profile', [DashboardController::class, 'profile'])->name('user.profile');
    Route::get('portal/payment-history', [DashboardController::class, 'paymentHistory'])->name('payment.history');
    Route::get('portal/change-password', [DashboardController::class, 'passwordChange'])->name('user.passwordChange');
    Route::get('portal/order-history', [DashboardController::class, 'orderHistory'])->name('user.history');
    Route::get('portal/order-details/{orderid}', [DashboardController::class, 'orderDetails'])->name('user.details');
    Route::get('portal/transaction-statements', [DashboardController::class, 'statements'])->name('user.statements');
});

// Route::get('/track-order', [DashboardController::class, 'orderTracking'])->name('user.tracking');

Route::get('/thankyou', [DashboardController::class, 'thanks'])->name('thanks');



// affilate
Route::post('/affilate', [AffilateController::class, 'affilatesubmit'])->name('affilatesubmit')->middleware("user");
