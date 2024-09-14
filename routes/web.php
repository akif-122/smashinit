<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminExtraController;
use App\Http\Controllers\AdminItemController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Artisan;

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
//Route::get('/', [RegistrationController::class, 'login_page'])->name('login-page');
Route::get('clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Application cache cleared!';
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/category-items/{id}', [HomeController::class, 'category_items'])->name('category.items');
Route::get('/item-order-page/{id}', [HomeController::class, 'item_order_page'])->name('item.order.page');
Route::get('/item-add-to-cart', [HomeController::class, 'item_add_to_cart'])->name('item.add.to.cart');

Route::get('/item-add-to-order', [HomeController::class, 'item_add_to_order'])->name('item.add.to.order');
Route::get('/item-increment-quantity', [HomeController::class, 'item_increment_quantity'])->name('item.increment.quantity');
Route::get('/item-decrement-quantity', [HomeController::class, 'item_decrement_quantity'])->name('item.decrement.quantity');
Route::get('/item-remove-from-cart', [HomeController::class, 'item_remove_from_cart'])->name('item.remove.from.cart');
Route::get('/item-add-extra', [HomeController::class, 'item_add_extra'])->name('item.add.extra');
Route::get('/item-remove-extra', [HomeController::class, 'item_remove_extra'])->name('item.remove.extra');


Route::get('/admin', [AuthController::class, 'login_page'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AuthController::class, 'admin_profile'])->name('admin.profile');



    // Admin category routes
    Route::get('/admin/categories', [AdminCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/admin/categories/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/categories/save', [AdminCategoryController::class, 'save'])->name('admin.category.save');
    Route::get('/admin/categories/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/admin/categories/update', [AdminCategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/admin/categories/delete/{id}', [AdminCategoryController::class, 'delete'])->name('admin.category.delete');
    Route::get('/admin/categories/status/{id}', [AdminCategoryController::class, 'status'])->name('admin.category.status');

    // Admin User routes
    Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.user.index');
    Route::get('/admin/users/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/admin/users/update', [AdminUserController::class, 'update'])->name('admin.user.update');
    Route::get('/admin/users/delete/{id}', [AdminUserController::class, 'delete'])->name('admin.user.delete');
    Route::get('/admin/users/status/{id}', [AdminUserController::class, 'status'])->name('admin.user.status');

    //Admin Blog routes

    Route::get('/admin/blog', [AdminBlogController::class, 'blog'])->name('admin.blog.edit');
    Route::post('/admin/blog/update', [AdminBlogController::class, 'update'])->name('admin.blog.update');

    // admin Item routes
    Route::get('/admin/item/index', [AdminItemController::class, 'index'])->name('admin.item.index');
    Route::get('/admin/item/create', [AdminItemController::class, 'create'])->name('admin.item.create');
    Route::post('/admin/item/save', [AdminItemController::class, 'save'])->name('admin.item.save');
    Route::get('/admin/item/details/{id}', [AdminItemController::class, 'details'])->name('admin.item.details');
    Route::get('/admin/item/edit/{id}', [AdminItemController::class, 'edit'])->name('admin.item.edit');
    Route::post('/admin/item/update', [AdminItemController::class, 'update'])->name('admin.item.update');
    Route::post('/admin/item/image-delete', [AdminItemController::class, 'image_delete'])->name('admin.item.image-delete');
    Route::get('/admin/item/delete/{id}', [AdminItemController::class, 'delete'])->name('admin.item.delete');
    
    //Admin Order Routes
    Route::get('/admin/order/index', [AdminOrderController::class, 'index'])->name('admin.order.index');
     Route::get('/admin/order/details/{id}', [AdminOrderController::class, 'details'])->name('admin.order.details');
     Route::post('/admin/order/status-change/{id}', [AdminOrderController::class, 'status_change'])->name('admin.order.status.change');



    Route::get('/user-logout', [AuthController::class, 'user_logout'])->name('user-logout');
    Route::post('/user/profile/update', [AuthController::class, 'profile_update'])->name('user-profile-update');
    Route::post('/user/password/update', [AuthController::class, 'password_update'])->name('user-password-update');

});

// Frontend Routes
Route::get('/user-login', [AuthController::class, 'user_login_page'])->name('user.login.page');
Route::post('/user-login', [AuthController::class, 'user_login'])->name('user-login');
Route::get('/user-register', [AuthController::class, 'user_register_page'])->name('user-register');
Route::get('/user-account', [AuthController::class, 'user_account'])->name('user-account');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get("/forget-password", [HomeController::class, "forgetPassword"]);
Route::get("/reset-password", [HomeController::class, "resetPassword"]);


Route::get('/success', [HomeController::class, 'success'])->name('success');
Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/clear-cart', [HomeController::class, 'clear_cart'])->name('clear-cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/user-login', [AuthController::class, 'user_login_page'])->name('user-login');
Route::post('/user-save', [AuthController::class, 'user_save'])->name('user-save');

