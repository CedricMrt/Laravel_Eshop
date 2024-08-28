<?php

use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\Categories;
use App\Livewire\Auth\ForgotPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;

use App\Livewire\MyOrdersPage;
use App\Livewire\OrderDetailPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/categories', Categories::class);
Route::get('/products', ProductsPage::class);
Route::get('/products/{product}', ProductDetailPage::class);
Route::get('/cart', CartPage::class);
Route::get('/checkout', CheckoutPage::class);
Route::get('/my-orders', MyOrdersPage::class);
Route::get('/my-orders/{order}', OrderDetailPage::class);
Route::get('/cancel', CancelPage::class);
Route::get('/success', SuccessPage::class);

Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/forgot', ForgotPage::class);
Route::get('/reset', ResetPasswordPage::class);