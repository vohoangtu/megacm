<?php

use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function(){
    Route::get("/", function (){
        abort(404, "Not Found");
    }) ;
});