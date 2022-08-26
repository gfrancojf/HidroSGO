<?php

namespace App\Http\Controllers;

use App\Models\EstacionBombeo;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Acueducto;
use App\Models\Sistema;
use App\Models\Infraestructura;
use App\Models\TipoInfraestructura;
use App\Models\UbicacionGeografica;
use App\Models\TipoEstacionBombeo;
use App\Models\TipoServicioEstacionBombeo;
use Illuminate\Http\Request;

/**
 * Class EstacionBombeoController
 * @package App\Http\Controllers
 */
class EstacionBombeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estacionBombeos = EstacionBombeo::paginate();

        return view('estacion-bombeo.index', compact('estacionBombeos'))
            ->with('i', (request()->input('page', 1) - 1) * $estacionBombeos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estacionBombeo = new EstacionBombeo();
        $infraestructura = new Infraestructura();
        $ubicacionGeografica = new UbicacionGeografica();
        $estados = Estado::get()->all();
        $tipoin = TipoInfraestructura::get()->all();
        $sistemas = Sistema::get()->all();
        $acueducto = Acueducto::get()->all();
        $tipoestacion = TipoEstacionBombeo::get()->all();
        $tiposervicio = TipoServicioEstacionBombeo::get()->all();
        return view('estacion-bombeo.create', compact('estacionBombeo', 'infraestructura', 'estados','ubicacionGeografica','tipoin','sistemas','acueducto', 'tipoestacion', 'tiposervicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstacionBombeo::$rules);

        $estacionBombeo = EstacionBombeo::create($request->all());

        return redirect()->route('estacion-bombeos.index')
            ->with('success', 'EstacionBombeo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estacionBombeo = EstacionBombeo::find($id);

        return view('estacion-bombeo.show', compact('estacionBombeo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estacionBombeo = EstacionBombeo::find($id);

        return view('estacion-bombeo.edit', compact('estacionBombeo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstacionBombeo $estacionBombeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstacionBombeo $estacionBombeo)
    {
        request()->validate(EstacionBombeo::$rules);

        $estacionBombeo->update($request->all());

        return redirect()->route('estacion-bombeos.index')
            ->with('success', 'EstacionBombeo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estacionBombeo = EstacionBombeo::find($id)->delete();

        return redirect()->route('estacion-bombeos.index')
            ->with('success', 'EstacionBombeo deleted successfully');
    }
}
