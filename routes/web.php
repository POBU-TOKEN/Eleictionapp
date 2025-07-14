<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'index'])->name('home');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/polls', [PollController::class, 'index'])->name('polls.index');
    Route::post('/polls/vote/{poll}', [PollController::class, 'vote'])->name('polls.vote');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:voter'])->group(function () {
    Route::get('/voter/dashboard', [VoterController::class, 'dashboard'])->name('voter.dashboard');
});

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('voter.dashboard');
    }
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/voter/dashboard', [VoterController::class, 'dashboard'])->name('voter.dashboard');
});

/*
//<<< PUBLIC ROUTES >>>
Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/categories', [SiteController::class, 'categories'])->name('category.list');
Route::get('/search', [SiteController::class, 'search'])->name('search');

Route::get('/checkout', [PedidoController::class, 'index'])->name('checkout-view')->middleware('auth');
Route::post('/checkout', [PedidoController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::get('/payment', [PedidoController::class, 'paymentView'])->name('payment-view')->middleware('auth');
Route::post('/payment', [PedidoController::class, 'payment'])->name('payment')->middleware('auth');
Route::post('/checkpay', [PedidoController::class, 'pagamentoPedido'])->name('checkpay')->middleware('auth');
// routa de comprovativo
Route::get('comprovativo/{id}', [PedidoController::class, 'gerarComprovativo'])->name('orders.comprovativo')->middleware('auth');

Route::get('/categoria/{url}', [SiteController::class, 'categoryShow'])->name('category.show');
Route::get('/shop', [SiteController::class, 'shopList'])->name('site.shop');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'cartAdd'])->name('cart.add');
Route::post('/cart/clear', [CartController::class, 'cartClear'])->name('cart.clear');
Route::post('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'cartRemove'])->name('cart.remove');
Route::get('/details/{url}', [SiteController::class, 'productDetails'])->name('site.details');
Route::get('/favoritos', [FavoritoController::class, 'index'])->name('favoritos.index');
Route::post('/favoritos', [FavoritoController::class, 'addFavorito'])->name('favoritos.add')->middleware('auth');
Route::post('/favoritos/remove', [FavoritoController::class, 'removeFavorito'])->name('favoritos.remove')->middleware('auth');
Route::post('/favoritos/clear', [FavoritoController::class, 'clearFavorito'])->name('favoritos.clear')->middleware('auth');
//<<< END PUBLIC ROUTES >>>

//<<< AUTHENTICATION ROUTES >>>

Route::controller(AuthController::class)->group(function () {
    Route::middleware('auth')->group(function () {
    
        Route::post('/logout', 'logout')->name('logout');
    });
    
    Route::middleware(Visitante::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'userRegister')->name('user.register');
        Route::get('/login', 'login')->name('login')->middleware('guest');
        Route::post('/login', 'loginAttempt')->name('user.login');
        Route::get('/password-reset', 'passwordResetForm')->name('auth.reset');
        
    });
});
//<<< END AUTHENTICATION ROUTES >>>

//<<< USER ROUTES >>>
Route::get('/user/dashboard', [UserController::class, 'index'])->name('users.dashboard')->middleware('auth');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');
Route::get('/user/orders', [UserController::class, 'ordersList'])->name('users.orders')->middleware('auth');
Route::get('/user/order/{id}', [UserController::class, 'orderShow'])->name('users.orders-show')->middleware('auth');
//<<< END USER ROUTES >>>
 
//<<< ADMIN ROUTES >>>
Route::middleware(['auth', CheckAdmin::class, 'can:admin-access'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
        
        Route::get('/products', [ProdutoController::class, 'index'])->name('admin.products');
        Route::get('/create', [ProdutoController::class, 'create'])->name('admin.create');
        Route::post('/store', [ProdutoController::class, 'store'])->name('admin.store');
        Route::get('/edit/{url}', [ProdutoController::class, 'edit'])->name('admin.edit');
        Route::post('/update/{url}', [ProdutoController::class, 'update'])->name('admin.update');
        Route::post('/destroy/{url}', [ProdutoController::class, 'destroy'])->name('admin.delete');

        Route::get('orders', [PedidoController::class, 'ordersList'])->name('admin.orders');
        Route::get('orders/{id}', [PedidoController::class, 'orderShow'])->name('admin.orders.show');
        Route::get('orders/status/{id}', [PedidoController::class, 'status'])->name('admin.orders.status-form');
        Route::get('orders/status/{id}', [PedidoController::class, 'statusEdit'])->name('admin.orders.status-view');
        Route::post('orders/status/{id}', [PedidoController::class, 'status'])->name('admin.orders.status');

        Route::resource('category', CategoriaController::class)->except('show');
    });
});
//<<< END ADMIN ROUTES >>>
*/
