<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Detaillist;
use App\Livewire\Home;
use App\Livewire\Lists;
use App\Livewire\Tasks;
use App\Livewire\ListCreate;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return redirect('/lists');
});
Route::get('/lists', Lists::class);
Route::get('/listcreate',ListCreate::class);
Route::get('/profile',Profile::class);
Route::get('/detaillist/{id}',Detaillist::class);
Route::get('/halamanlogin',Login::class);
Route::get('/halamanregister',Register::class);
