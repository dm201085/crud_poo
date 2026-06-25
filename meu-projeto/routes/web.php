<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdversarioController;
use App\Http\Controllers\IngressoController;
use App\Http\Controllers\FormaPagamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD Adversários
    Route::resource('adversarios', AdversarioController::class);

    // CRUD Ingressos
    Route::resource('ingressos', IngressoController::class);

    // CRUD Forma de Pagamento
    Route::resource('forma-pagamentos', FormaPagamentoController::class);
});

require __DIR__.'/auth.php';