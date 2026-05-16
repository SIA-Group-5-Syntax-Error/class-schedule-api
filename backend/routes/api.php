<?php

use Illuminate\Support\Facades\Route;

Route::get('/schedule', function () {
    return response()->json([
        [
            "subject" => "System Integration Architecture",
            "time" => "10:00 AM - 1:00 PM",
            "day" => "Saturday",
            "room" => "Room 305"
        ],
        [
            "subject" => "Web System and Technologies",
            "time" => "4:00 PM - 7:00 PM",
            "day" => "Saturday",
            "room" => "Room 302"
        ]
    ]);
});