<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',\App\Http\Livewire\HomeComponent::class)->name('homePage');
Route::get('/profile',\App\Http\Livewire\ProfileComponent::class)->name('profile');
Route::get('/category',\App\Http\Livewire\Ecommerce\Category\CategoryComponent::class)->name('category');
Route::get('/innerbrandcategory/{id}',\App\Http\Livewire\Ecommerce\Category\InnerBrandCategoryComponent::class)->name('innerbrand');
Route::get('/innercategory/{id}',\App\Http\Livewire\Ecommerce\Category\InnerCategoryComponent::class)->name('innercategory');
Route::get('/search',\App\Http\Livewire\Ecommerce\Search\SearchComponent::class)->name('search');
Route::get('/notification',\App\Http\Livewire\Ecommerce\Notification\NotificationComponent::class)->name('notification');
Route::get('/favourite',\App\Http\Livewire\Ecommerce\Favourite\FavouriteComponent::class)->name('favourite');
Route::get('/cart',\App\Http\Livewire\Ecommerce\Cart\CartComponent::class)->name('cart');
Route::get('/products/{Brandid?}/{CatId?}/{ScatId?}',\App\Http\Livewire\Ecommerce\Products\MainPageComponent::class)->name('products');
Route::get('/productsdetails/{id}',\App\Http\Livewire\Ecommerce\ProductsDetails\MainPageComponent::class)->name('productDetails');
Route::get('/pay/{id?}/{Authority?}/{code_pe?}/{status?}/{m?}',\App\Http\Livewire\Ecommerce\PayComponent::class)->name('pay');


//For USR
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',\App\Http\Livewire\User\UserDashboardComponent::class)->name('userdashboard');

});

//For ADM
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',\App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admindashboard');
    Route::get('/admin/definemenu',\App\Http\Livewire\Admin\Setting\DefineMenuComponent::class)->name('definemenu');
    Route::get('/admin/seo',\App\Http\Livewire\Admin\Setting\SeoComponent::class)->name('seo');
    Route::get('admin/contact',\App\Http\Livewire\Admin\Setting\ContactusComponent::class)->name('contactinfo');
    Route::get('admin/productparameters',\App\Http\Livewire\Admin\ProductParameters\MainPageComponent::class)->name('productparameters');
    Route::get('admin/products',\App\Http\Livewire\Admin\Product\MainPageComponent::class)->name('adminproducts');
    Route::get('admin/slider',\App\Http\Livewire\Admin\Slider\MainSliderComponent::class)->name('sliders');
});
