<?php

use App\Http\Controllers\DraftController;
use App\Models\Draft;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $drafts = Draft::where('is_published', true)->paginate(10);
    return view('welcome', ['drafts' => $drafts]);
})->name('index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('draft', DraftController::class)->except([
        'create', 'store', 'edit', 'update', 'destroy'
    ]);
});
