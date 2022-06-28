<?php

use Illuminate\Support\Facades\Route;
//
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ContactsComponent;
use App\Http\Livewire\HelppageComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\BrandComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\FeedbackComponent;
//
use App\Http\Livewire\User\UserDashboardComponent;
//
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminBrandComponent;
use App\Http\Livewire\Admin\AdminAddBrandComponent;
use App\Http\Livewire\Admin\AdminEditBrandComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminUserComponent;
use App\Http\Livewire\Admin\AdminRoleComponent;
use App\Http\Livewire\Admin\AdminUserRoleEdit;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/contacts', ContactsComponent::class);
Route::get('/help', HelppageComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/feedback', FeedbackComponent::class)->name('feedback');
Route::get('/product/details{slug}', DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/product-brand/{brand_id}', BrandComponent::class)->name('product.brand');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

// For USR:
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For ADM:
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/brands', AdminBrandComponent::class)->name('admin.brands');
    Route::get('/admin/brands/add', AdminAddBrandComponent::class)->name('admin.addbrand');
    Route::get('/admin/brands/edit{brand_id}', AdminEditBrandComponent::class)->name('admin.editbrand');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/products/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/products/edit{product_id}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/users', AdminUserComponent::class)->name('admin.users');
    Route::get('/admin/roles', AdminRoleComponent::class)->name('admin.roles');
    //Route::get('/admin/roles/add', AdminAddRoleComponent::class)->name('admin.addrole');
    Route::get('/admin/role/edit{user_id}', AdminUserRoleEdit::class)->name('admin.roleedit');

});



/*// Spatie Permission:
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/brands', AdminBrandComponent::class)->name('admin.brands');
    Route::get('/admin/brands/add', AdminAddBrandComponent::class)->name('admin.addbrand');
    Route::get('/admin/brands/edit{brand_id}', AdminEditBrandComponent::class)->name('admin.editbrand');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/products/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/products/edit{product_id}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/users', AdminUserComponent::class)->name('admin.users');
    Route::get('/admin/roles', AdminRoleComponent::class)->name('admin.roles');
    Route::get('/admin/role/edit{user_id}', AdminUserRoleEdit::class)->name('admin.roleedit');

});*/
