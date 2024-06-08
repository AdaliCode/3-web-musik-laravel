<?php

use App\Models\Song;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $songs = Song::all();
    return view('home', compact('songs'));
});
