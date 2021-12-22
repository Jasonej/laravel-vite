<?php

use Illuminate\Support\Facades\Route;

Route::view('/{route?}', 'main')->where('route', '(?!api|build).*');
