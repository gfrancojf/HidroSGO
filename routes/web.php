<?php

use App\Http\Controllers\AbastecimientoController;
use App\Http\Controllers\AcueductoController;
use App\Http\Controllers\AuditsController;
use App\Http\Controllers\AveriasController;
use App\Http\Controllers\CaptacionController;
use App\Http\Controllers\CicloController;
use App\Http\Controllers\DiqueTomaController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\EmbalseController;
use App\Http\Controllers\InfraestructuraController;
use App\Http\Controllers\OrganizacionesController;
use App\Http\Controllers\PlantasController;
use App\Http\Controllers\PozoProfundoController;
use App\Http\Controllers\TipoInfraestructuraController;
use App\Http\Controllers\TipoValvulasController;
use App\Http\Controllers\TomaRioController;
use App\Http\Controllers\UsuariosControllers;
use Illuminate\Support\Facades\Route;
use p\Http\Controllers\FabricantesController;
use p\Http\Controllers\RolesControllers;
use p\Http\Controllers\ValvulasController;

Route::get('/', function () {
    return view('welcome');
});

// bloqueamos el registro por ruta register
Auth::routes(['register' => false]);

//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resources([
        'usuarios' => UsuariosControllers::class,
        'roles' => RolesControllers::class,
        'acueducto' => AcueductoController::class,
        'captacion' => CaptacionController::class,
        'dique_toma' => DiqueTomaController::class,
        'embalses' => EmbalseController::class,
        'pozo_profundos' => PozoProfundoController::class,
        'toma_rio' => TomaRioController::class,
        'valvulas' => ValvulasController::class,
        'tipovalvulas' => TipoValvulasController::class,
        'infraestructura' => InfraestructuraController::class,
        'fabricantes' => FabricantesController::class,
        'tipoinfraestructura' => TipoInfraestructuraController::class,
        'averias' => AveriasController::class,
        'ciclos' => CicloController::class,
        'averias' => AveriasController::class,
        'organizaciones' => OrganizacionesController::class,
        'abastecimiento' => AbastecimientoController::class,

    ]);

    Route::post('usuarios/{id}/restore', [UsuariosControllers::class, 'restore'])->name('usuarios.restore');
    Route::get('/auditar', [AuditsController::class, 'index'])->name('auditar.index');
});



Route::post('/llenarMunicipios', [DireccionController::class, 'llenarMunicipios']);
Route::post('/llenarParroquias', [DireccionController::class, 'llenarParroquias']);