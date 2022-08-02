<?php

use App\Http\Livewire\AboutItemsWire;
use App\Http\Livewire\Auth\AccountPageWire;
use App\Http\Livewire\DevTools\MigrationMakerWire;
use App\Http\Livewire\LimeLampWire;
use App\Http\Livewire\MainPageWire;
use App\Http\Livewire\Manage\ManageAboutItemsWire;
use App\Http\Livewire\Other\DesktopPowerSupplyWire;
use App\Http\Livewire\Other\PieRackWire;
use Illuminate\Support\Facades\Route;

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



Route::get('/', MainPageWire::class);
Route::get('/set-state-{theme}', function($theme){

    dd($theme);
});
/** Front end routes that require authentication: account page, fake shopping cart? , etc */
Route::middleware(['auth'])->group(function(){
    Route::get('/account', AccountPageWire::class);
});
Route::get('/lime-desk-lamp', LimeLampWire::class);
Route::get('/migration-maker', MigrationMakerWire::class);
Route::get('/about', AboutItemsWire::class);
Route::get('/pi-rack', PieRackWire::class);
Route::get('/desktop-power-supply', DesktopPowerSupplyWire::class);

Route::middleware(['auth', 'editor'])->group(function(){
    Route::get('/about/manage', ManageAboutItemsWire::class);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
