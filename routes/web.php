<?php

use App\Http\Controllers\AcueductoController, App\Http\Controllers\AuditsController;

use App\Http\Controllers\CaptacionController;
use App\Http\Controllers\DiqueTomaController;
use App\Http\Controllers\EmbalseController;
use App\Http\Controllers\PozoProfundoController;
use App\Http\Controllers\CicloController;
use App\Http\Controllers\AbastecimientoController;
use App\Http\Controllers\OrganizacionesController;
use App\Http\Controllers\AveriasController;
use App\Http\Controllers\TomaRioController;
use App\Http\Controllers\PlantasController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\RolesControllers;
use App\Http\Controllers\UsuariosControllers;
use App\Http\Controllers\ValvulasController;
use App\Http\Controllers\TipoValvulasController;
use App\Http\Controllers\FabricantesController;
use App\Http\Controllers\InfraestructuraController;
use App\Http\Controllers\EstacionBombeoController;
use App\Http\Controllers\TipoInfraestructuraController;



use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


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
        'pozo_profundo' => PozoProfundoController::class,
        'toma_rio' => TomaRioController::class,
        'valvulas' => ValvulasController::class,
        'tipovalvulas' => TipoValvulasController::class,
        'infraestructura' => InfraestructuraController::class,
        'fabricantes' => FabricantesController::class,
        'tipoinfraestructura' => TipoInfraestructuraController::class,



    ]);


    Route::post('usuarios/{id}/restore', [UsuariosControllers::class, 'restore'])->name('usuarios.restore');
    Route::get('/auditar', [AuditsController::class, 'index'])->name('auditar.index');
});

//// rutas que se deben optimizar ////
// REGISTRO //
Route::resource('captacion', CaptacionController::class);
Route::resource('acueducto', AcueductoController::class);
Route::resource('embalses', EmbalseController::class);
Route::resource('plantas', PlantasController::class);
Route::resource('diquetoma', DiqueTomaController::class);
Route::resource('tomarios', TomaRioController::class);
Route::resource('ciclos', CicloController::class);
Route::resource('averias', AveriasController::class);
Route::resource('organizaciones', OrganizacionesController::class);
Route::resource('abastecimiento', AbastecimientoController::class);
Route::resource('pozoprofundos', PozoProfundoController::class);

Route::post('/llenarMunicipios',[DireccionController::class, 'llenarMunicipios']);
Route::post('/llenarParroquias',[DireccionController::class, 'llenarParroquias']);



