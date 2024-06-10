<?php

use App\Models\Song;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $songs = Song::with('singers')->get();
    return view('home', compact('songs'));
});

Route::get('/songs/{id}', function ($songId) {
    $song = Song::find($songId);
    return view('detail', compact('song'));
});

Route::fallback(function () {
    return "404";
});
