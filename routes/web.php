<?php

use App\Http\Controllers\LetterCreditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProyectController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('letter_credit_memory.index');
})->name('home');



Route::get('/gerente', function () {
    // Autenticar al usuario con ID 1
    $user = \App\Models\User::find(1);

    if ($user) {
        Auth::login($user);
        return view('gerente.index');
    } else {
        // Manejar el caso en el que el usuario con ID 1 no se encuentre
        abort(404);
    }
})->name('gerente.index');

Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/change-password', [UserController::class, 'showChangePasswordForm'])->name('user.change-password');
Route::post('/user/change-password', [UserController::class, 'processChangePassword']);
Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('user.update-password');

Route::resource('maintenance', MaintenanceController::class);
Route::get('/proyect/done', [ProyectController::class, 'done'])->name('proyect.done');
Route::get('/proyect/progress', [ProyectController::class, 'progress'])->name('proyect.progress');
Route::resource('staff', StaffController::class);
Route::resource('proyect', ProyectController::class);


Route::post('/store', [App\Http\Controllers\LetterCreditController::class, 'store'])->name('letter-store');

Route::get('/show', [LetterCreditController::class, 'show'])->name('show');

Route::get('/show2/{letter}', [LetterCreditController::class, 'show2'])->name('show2');
Route::get('/show3/{letter}', [LetterCreditController::class, 'show3'])->name('show3');
Route::get('/show4/{letter}', [LetterCreditController::class, 'show4'])->name('show4');

Route::get('/status/{letter}', [LetterCreditController::class, 'statusChange'])->name('status');

Route::get('/update/{letter}', [LetterCreditController::class, 'updateStatus'])->name('update');

Route::get('/update2/{letter}', [LetterCreditController::class, 'updateStatus2'])->name('update2');

Route::get('/show2', [LetterCreditController::class, 'showAll'])->name('showall');
Route::get('/show3', [LetterCreditController::class, 'showAll2'])->name('showall-2');



Route::post('/memories/save', [LetterCreditController::class, 'memorySave'])->name('memory-save');




// Rutas para la vista "A la vista card"
Route::get('/a-la-vista/index', [LetterCreditController::class, 'a_la_vista_index'])->name('a-la-vista-index');
Route::get('/a-la-vista/bills', [LetterCreditController::class, 'a_la_vista_bills'])->name('a-la-vista-bills');
Route::get('/a-la-vista/conditions', [LetterCreditController::class, 'a_la_vista_conditions'])->name('a-la-vista-conditions');
Route::get('/a-la-vista/form', [LetterCreditController::class, 'a_la_vista_form'])->name('a-la-vista-form');

// Rutas para la vista "Back to Back card"
Route::get('/back-to-back/index', [LetterCreditController::class, 'back_to_back_index'])->name('back-to-back-index');
Route::get('/back-to-back/bills', [LetterCreditController::class, 'back_to_back_bills'])->name('back-to-back-bills');
Route::get('/back-to-back/conditions', [LetterCreditController::class, 'back_to_back_conditions'])->name('back-to-back-conditions');
Route::get('/back-to-back/form', [LetterCreditController::class, 'back_to_back_form'])->name('back-to-back-form');

// Rutas para la vista "Clausula roja card"
Route::get('/clausula-roja/index', [LetterCreditController::class, 'clausula_roja_index'])->name('clausula-roja-index');
Route::get('/clausula-roja/bills', [LetterCreditController::class, 'clausula_roja_bills'])->name('clausula-roja-bills');
Route::get('/clausula-roja/conditions', [LetterCreditController::class, 'clausula_roja_conditions'])->name('clausula-roja-conditions');
Route::get('/clausula-roja/form', [LetterCreditController::class, 'clausula_roja_form'])->name('clausula-roja-form');

// Rutas para la vista "Diferida card"
Route::get('/diferida/index', [LetterCreditController::class, 'diferida_index'])->name('diferida-index');
Route::get('/diferida/bills', [LetterCreditController::class, 'diferida_bills'])->name('diferida-bills');
Route::get('/diferida/conditions', [LetterCreditController::class, 'diferida_conditions'])->name('diferida-conditions');
Route::get('/diferida/form', [LetterCreditController::class, 'diferida_form'])->name('diferida-form');

// Rutas para la vista "Directa card"
Route::get('/direct/index', [LetterCreditController::class, 'direct_index'])->name('direct-index');
Route::get('/direct/bills', [LetterCreditController::class, 'direct_bills'])->name('direct-bills');
Route::get('/direct/conditions', [LetterCreditController::class, 'direct_conditions'])->name('direct-conditions');
Route::get('/direct/form', [LetterCreditController::class, 'direct_form'])->name('direct-form');

// Rutas para la vista "Importacion card"
Route::get('/importacion/index', [LetterCreditController::class, 'importacion_index'])->name('importacion-index');
Route::get('/importacion/bills', [LetterCreditController::class, 'importacion_bills'])->name('importacion-bills');
Route::get('/importacion/conditions', [LetterCreditController::class, 'importacion_conditions'])->name('importacion-conditions');
Route::get('/importacion/form', [LetterCreditController::class, 'importacion_form'])->name('importacion-form');

// Rutas para la vista "Irrevocable card"
Route::get('/irrevocable/index', [LetterCreditController::class, 'irrevocable_index'])->name('irrevocable-index');
Route::get('/irrevocable/bills', [LetterCreditController::class, 'irrevocable_bills'])->name('irrevocable-bills');
Route::get('/irrevocable/conditions', [LetterCreditController::class, 'irrevocable_conditions'])->name('irrevocable-conditions');
Route::get('/irrevocable/form', [LetterCreditController::class, 'irrevocable_form'])->name('irrevocable-form');

// Rutas para la vista "Revocable card"
Route::get('/revocable/index', [LetterCreditController::class, 'revocable_index'])->name('revocable-index');
Route::get('/revocable/bills', [LetterCreditController::class, 'revocable_bills'])->name('revocable-bills');
Route::get('/revocable/conditions', [LetterCreditController::class, 'revocable_conditions'])->name('revocable-conditions');
Route::get('/revocable/form', [LetterCreditController::class, 'revocable_form'])->name('revocable-form');

// Rutas para la vista "Rotativa card"
Route::get('/rotativa/index', [LetterCreditController::class, 'rotativa_index'])->name('rotativa-index');
Route::get('/rotativa/bills', [LetterCreditController::class, 'rotativa_bills'])->name('rotativa-bills');
Route::get('/rotativa/conditions', [LetterCreditController::class, 'rotativa_conditions'])->name('rotativa-conditions');
Route::get('/rotativa/form', [LetterCreditController::class, 'rotativa_form'])->name('rotativa-form');

// Rutas para la vista "Standby card"
Route::get('/standby/index', [LetterCreditController::class, 'standby_index'])->name('standby-index');
Route::get('/standby/bills', [LetterCreditController::class, 'standby_bills'])->name('standby-bills');
Route::get('/standby/conditions', [LetterCreditController::class, 'standby_conditions'])->name('standby-conditions');
Route::get('/standby/form', [LetterCreditController::class, 'standby_form'])->name('standby-form');

// Rutas para la vista "Transferible card"
Route::get('/transferible/index', [LetterCreditController::class, 'transferible_index'])->name('transferible-index');
Route::get('/transferible/bills', [LetterCreditController::class, 'transferible_bills'])->name('transferible-bills');
Route::get('/transferible/conditions', [LetterCreditController::class, 'transferible_conditions'])->name('transferible-conditions');
Route::get('/transferible/form', [LetterCreditController::class, 'transferible_form'])->name('transferible-form');
