<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BudgetController;
Route::get('/', function () {
    return view('Users Frontend Theme.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//**********accounts routes ************** */
//Route::resource('accounts', AccountController::class);
Route::post('create_account', [AccountController::class, 'store'])->name('create_account');
Route::get('get_create_account', [AccountController::class, 'create'])->name('get_create_account');
Route::get('/accounts/{id}/update-account', [AccountController::class, 'edit'])->name('update-account');
Route::put('/accounts/{id}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('/accounts/{account}', [AccountController::class, 'destroy'])->name('delete_account');
Route::get('get-accounts', [AccountController::class, 'index'])->name('get-accounts');
//****************catogories routes ************************* */
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::put('/categories/{id}', [AccountController::class, 'update'])->name('categories.update');
//****************transactions routs *********************** */

Route::get('transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('transactions/store', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('transactions/index', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('transactions/{id}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');
Route::put('transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy');


//***********************budgets routs *********************************** */
Route::get('budgets/create', [BudgetController::class, 'create'])->name('budgets.create');
Route::post('budgets/store', [BudgetController::class, 'store'])->name('budgets.store');
Route::get('budgets/index', [BudgetController::class, 'index'])->name('budgets.index');
Route::get('budgets/{id}/edit', [BudgetController::class, 'edit'])->name('budgets.edit');
Route::put('budgets/{id}', [BudgetController::class, 'update'])->name('budgets.update');
Route::delete('/budgets/{budget}', [TransactionController::class, 'destroy'])->name('budgets.destroy');
// Custom Registration Route
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::get('login_user', [AuthController::class, 'showLoginForm'])->name('login_user');

// This line should be removed if you are not using Laravel's default auth routes
// require __DIR__.'/auth.php';
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/registeration_account', [AuthController::class, 'register_account'])->name('registeration_account');

Route::get('/user-profile', function () {
    return view('Users Frontend Theme.user-profile');
})->name('user-profile');
Route::get('/user-profile', [AuthController::class, 'get_info'])->name('user-profile');
