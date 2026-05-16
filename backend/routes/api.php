<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/schedule', function () {

    $response = Http::get('https://69f34667bd2396bf530fa847.mockapi.io/schedule');

    return response()->json($response->json());

});