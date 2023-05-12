<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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
Route::group(['middleware' => ['AdminAuth']], function () {
    Route::post('admin/login_pro', [AdminController::class, 'checkadmin'])->name('auth.checkadmin');
    Route::get('admin/index', [AdminController::class, 'dashboard']);
    Route::get('admin/enquiry', [AdminController::class, 'enquiry']);
    Route::get('admin/enquiry_view', [AdminController::class, 'enquiry_view']);
    Route::get('admin/category', [AdminController::class, 'category']);
    Route::get('admin/categories_view/{id}',[AdminController::class,'categories_view']);
    Route::get('admin/customers', [AdminController::class, 'customers']);
    Route::get('admin/customers_view', [AdminController::class, 'customers_view']);
    Route::get('admin/products', [AdminController::class, 'products']);
    Route::get('admin/products_view/{id}', [AdminController::class, 'products_view']);
    Route::get('admin/orders', [AdminController::class, 'orders']);
    Route::get('admin/orders_view', [AdminController::class, 'orders_view']);
    Route::post('admin/add_categories', [CategoryController::class, 'add_categories'])->name('admin.addcategory');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);
    Route::get('admin/category/status/{status}/{id}', [CategoryController::class, 'status']);
    Route::post('admin/update/{id}', [CategoryController::class, 'category_update'])->name('admin.updatecategory');
    Route::post('admin/add_products', [ProductController::class, 'add_products'])->name('admin.addproduct');
    Route::get('admin/products/delete/{id}', [ProductController::class, 'delete']);
    Route::get('admin/product/status/{status}/{id}', [ProductController::class, 'status']);
    Route::post('admin/product/update/{id}', [ProductController::class, 'product_update'])->name('admin.updateproduct');

    //logout
    Route::get('admin/logout', [AdminController::class, 'logout']);
    //logout
});

Route::get('admin/login', [AdminController::class, 'login']);
Route::get('admin/hash', [AdminController::class, 'hashp']);


//User
Route::post('user/registration_process', [UserController::class, 'save'])->name('auth.save');

Route::post('user/login_process', [UserController::class, 'check'])->name('auth.check');
Route::get('/', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/product', [UserController::class, 'product'])->name('user.product');
Route::get('/course-grid', [UserController::class, 'coursegrid']);
Route::get('/course-details', [UserController::class, 'coursedetails']);
Route::get('/job-category', [UserController::class, 'jobcategory']);
Route::get('/checkout', [UserController::class, 'checkout']);
Route::get('/cart', [UserController::class, 'cart']);
Route::get('/faq', [UserController::class, 'faq']);
Route::get('/privacy-policy', [UserController::class, 'privacypolicy']);
Route::get('/term-condition', [UserController::class, 'termcondition']);
Route::post('user/enquiry', [ContactController::class, 'enquiry'])->name('user.enquiry');
Route::get('/user-profile', [UserController::class, 'userprofile']);
Route::get('/user-order', [UserController::class, 'userorder']);
Route::get('admin/enquiry/delete/{id}', [ContactController::class, 'delete_enquiry']);

Route::get('admin/customer/status/{status}/{id}', [UserController::class, 'status']);
Route::get('admin/customer/delete/{id}', [UserController::class, 'delete']);

 Route::get('user/logout', [UserController::class, 'logout'])->name('auth.logout');
