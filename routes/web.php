<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;

use App\Http\Livewire\Work\WorkDashboardComponent;

use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\CalendaryComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/calendary', CalendaryComponent::class)->name('user.calendary');

});

//For Work
Route::middleware(['auth:sanctum', 'verified', 'authwork'])->group(function(){
    Route::get('/worker/dashboard',WorkDashboardComponent::class)->name('worker.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});