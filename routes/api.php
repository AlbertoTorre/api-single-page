<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=> 'auth:sanctum'], function(){

    Route::get('/projects/featureds/{featured}', [ ProjectController::class, 'featureds' ] )
    ->name('projects.featured.show');
});
