<?php

use App\Http\Controllers\feedbackController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Livewire\CrudLivewire;
use App\Livewire\FitnesLivewire;
use App\Livewire\GenerateLivewire;
use App\Models\feedback;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('api/register', [UserController::class, 'register_view'])->name('register_view');
Route::get('api/login', [UserController::class, 'login_view'])->name('login_view');
Route::post('/api/register',[UserController::class,'register'])->name('register');
Route::post('/api/login',[UserController::class, 'login'])->name('login');
Route::post('/api/logout',[UserController::class, 'logout'])->name('logout')->middleware('auth:api');

    Route::middleware('auth:api')->get('/', function () {
        return view('welcome');
    })->name('welcome');

    

Route::get('crud-livewire', [CrudLivewire::class, 'render'])->name('crud-livewire');
Route::get('crud-livewire-create', [CrudLivewire::class, 'create'])->name('crud-livewire-create');
Route::post('crud-livewire-store', [CrudLivewire::class, 'store'])->name('crud-livewire-store');
Route::get('crud-livewire-edit/{eloquent}', [CrudLivewire::class, 'edit'])->name('crud-livewire-edit');
Route::put('crud-livewire-update/{eloquent}', [CrudLivewire::class, 'update'])->name('crud-livewire-update');
Route::delete('crud-livewire-update/{eloquent}', [CrudLivewire::class, 'destroy'])->name('crud-livewire-delete');

Route::post('generate-livewire', [GenerateLivewire::class, 'generate'])->name('generate-livewire');
Route::delete('delete-livewire', [GenerateLivewire::class, 'destroy'])->name('delete-livewire');

Route::get('fitnes-livewire', [FitnesLivewire::class, 'render'])->name('fitnes-livewire');
Route::post('fitnes-livewire/store', [feedbackController::class, 'store'])->name('fitnes-livewire-store');
Route::post('fitnes-livewire/store/image', [ImageController::class, 'store'])->name('fitnes-livewire-store-image');