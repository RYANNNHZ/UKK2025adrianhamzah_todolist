<?php

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
Route::get('/tasks', Tasks::class);
Route::get('/listcreate',ListCreate::class);
Route::get('/profile',Profile::class);
