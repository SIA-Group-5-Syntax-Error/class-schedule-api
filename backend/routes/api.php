<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/schedule/{day}', function ($day) {

    $response = Http::get('https://69f34667bd2396bf530fa847.mockapi.io/schedule');

    $schedules = collect($response->json());

    $filtered = $schedules->filter(function ($item) use ($day) {
        return strtolower($item['day']) == strtolower($day);
    });

    return response()->json($filtered->values());

});
