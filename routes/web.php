<?php

use App\Http\Controllers\MessMateController;
use Illuminate\Support\Facades\Route;

route::get('/messMates', [MessMateController::class, 'index']);

route::get('/messMates/create', [MessMateController::class, 'create']);

route::post('/messMates', [MessMateController::class, 'store']);

route::get('/messMates/{id}', [MessMateController::class, 'show']);

route::get('/messMates/{id}/edit', [MessMateController::class, 'edit']);

route::put('/messMates/{id}', [MessMateController::class, 'update']);

route::delete('/messMates/{id}', [MessMateController::class, 'destroy']);
