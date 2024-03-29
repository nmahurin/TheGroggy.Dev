<?php

use App\Http\Livewire\AboutItemsWire;
use App\Http\Livewire\Auth\AccountPageWire;
use App\Http\Livewire\Dashboard\MailishWire;
use App\Http\Livewire\Dashboard\ReportsWire;
use App\Http\Livewire\DevTools\MigrationMakerWire;
use App\Http\Livewire\LimeLampWire;
use App\Http\Livewire\MainPageWire;
use App\Http\Livewire\Manage\ManageAboutItemsWire;
use App\Http\Livewire\Other\DesktopPowerSupplyWire;
use App\Http\Livewire\Other\PieRackWire;
use App\Http\Livewire\ProjectsWire;
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

Route::get('/', MainPageWire::class)->name('index');

/** Front end routes that require authentication: account page, fake shopping cart? , etc */
Route::middleware(['auth'])->group(function(){
    Route::get('/account', AccountPageWire::class);
});

Route::get('/projects', ProjectsWire::class)->name('projects');
Route::get('/lime-desk-lamp', LimeLampWire::class)->name('lime-desk-lamp');
Route::get('/migration-maker', MigrationMakerWire::class)->name('migration-maker');
Route::get('/about', AboutItemsWire::class)->name('about');
Route::get('/pi-rack', PieRackWire::class)->name('pi-rack');
Route::get('/desktop-power-supply', DesktopPowerSupplyWire::class)->name('desktop-power-supply');


/** My routes, for editing the pages */
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

    Route::get('reports', ReportsWire::class)->name('dashboard.reports');
    Route::get('mailish', MailishWire::class)->name('dashboard.mailish');

});
