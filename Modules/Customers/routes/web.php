<?php

use Illuminate\Support\Facades\Route;
use Modules\Customers\app\Http\Controllers\CustomersController;

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

include __dir__.'/admin.php';

Route::group([], function () {
    Route::resource('customers', CustomersController::class)->names('customers');
});