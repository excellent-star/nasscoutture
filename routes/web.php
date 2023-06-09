<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientSizesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\GenerateInvoice;
use App\Http\Controllers\OrderController;

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


Route::middleware(['checkloggeduser'])->group(function(){

    Route::get('/log-out', [GeneralController::class, 'log_out'])->name('log_out');
    Route::get('/dashboard', [GeneralController::class, 'dashboard'])->name('dashboard');
    Route::get('/add-client', [ClientController::class, 'add_client'])->name('add_client');
    Route::post('/create-client', [ClientController::class, 'create_client'])->name('create_client');
    Route::get('/update-client', [ClientController::class, 'update_client'])->name('update_client');
    Route::get('/edit-client/{id}', [ClientController::class, 'edit_client'])->name('edit_client');
    Route::get('/list-client', [ClientController::class, 'list_client'])->name('list_client');
    Route::get('/man-sizes/{user_id}', [ClientSizesController::class, 'man_sizes'])->name('man_sizes');
    Route::get('/woman-sizes/{user_id}', [ClientSizesController::class, 'woman_sizes'])->name('woman_sizes');

    Route::get('/list-male', [ClientController::class, 'list_male'])->name('list_male');
    Route::get('/list-female', [ClientController::class, 'list_female'])->name('list_female');

    Route::get('/list-today-order', [OrderController::class, 'list_today_order'])->name('list_today_order');
    
    Route::post('/save-man-veste-size', [ClientSizesController::class, 'save_man_veste_size'])->name('save_man_veste_size');
    Route::post('/save-man-pantalon-size', [ClientSizesController::class, 'save_man_pantalon_size'])->name('save_man_pantalon_size');
    Route::post('/save-man-chemise-size', [ClientSizesController::class, 'save_man_chemise_size'])->name('save_man_chemise_size');
    Route::post('/save-man-gilet-size', [ClientSizesController::class, 'save_man_gilet_size'])->name('save_man_gilet_size');
    Route::post('/save-man-tunique-size', [ClientSizesController::class, 'save_man_tunique_size'])->name('save_man_tunique_size');
    
    Route::post('/save-woman-veste-size', [ClientSizesController::class, 'save_woman_veste_size'])->name('save_woman_veste_size');
    Route::post('/save-woman-pantalon-size', [ClientSizesController::class, 'save_woman_pantalon_size'])->name('save_woman_pantalon_size');
    Route::post('/save-woman-jupe-size', [ClientSizesController::class, 'save_woman_jupe_size'])->name('save_woman_jupe_size');
    Route::post('/save-woman-robe-size', [ClientSizesController::class, 'save_woman_robe_size'])->name('save_woman_robe_size');
    Route::post('/save-woman-chemise-size', [ClientSizesController::class, 'save_woman_chemise_size'])->name('save_chemise_jupe_size');
    Route::post('/save-woman-tunique-size', [ClientSizesController::class, 'save_woman_tunique_size'])->name('save_woman_tunique_size');
    
    
    Route::get('/add-order/{client_id}/{sexe}/{veste}/{pantalon}/{jupe}/{robe}/{chemise}/{tunique}', [OrderController::class, 'add_order'])->name('add_order');
    Route::post('/store-order', [OrderController::class, 'store_order'])->name('store_order');
    
    Route::get('/list-orders', [OrderController::class, 'list_orders'])->name('list_orders');
    Route::get('/edit-order/{id}', [OrderController::class, 'edit_order'])->name('edit_order');

    Route::post('/update-order/{id}', [OrderController::class, 'update_order'])->name('update_order');
    
    Route::get('/print-invoice/{id}', [GenerateInvoice::class, 'print_invoice'])->name('print_invoice');

    Route::get('/print-client-sizes/{client_id}/{article}', [GenerateInvoice::class, 'print_client_sizes'])->name('print_client_sizes');


    Route::get('/edit-password', [GeneralController::class, 'edit_password'])->name('edit_password');
    Route::post('/update-password', [GeneralController::class, 'update_password'])->name('update_password');
       
});


Route::get('/', [GeneralController::class, 'login'])->name('login');
Route::post('/log-in', [GeneralController::class, 'log_in'])->name('log_in');











