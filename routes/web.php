
<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::class, "index"]);
Route::get("create", [PostController::class, "create"]);
Route::post('store', [PostController::class, "store"]);

