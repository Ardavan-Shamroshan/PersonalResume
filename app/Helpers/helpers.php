<?php

function active($route) {
    return !Illuminate\Support\Facades\Route::is($route) ?: 'active' ;
}
