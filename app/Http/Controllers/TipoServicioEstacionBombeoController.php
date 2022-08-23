<?php

namespace App\Http\Controllers;

use App\Models\TipoServicioEstacionBombeo;
use Illuminate\Http\Request;

/**
 * Class TipoServicioEstacionBombeoController
 * @package App\Http\Controllers
 */
class TipoServicioEstacionBombeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoServicioEstacionBombeos = TipoServicioEstacionBombeo::paginate();

        return view('tipo-servicio-estacion-bombeo.index', compact('tipoServicioEstacionBombeos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoServicioEstacionBombeos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoServicioEstacionBombeo = new TipoServicioEstacionBombeo();
        return view('tipo-servicio-estacion-bombeo.create', compact('tipoServicioEstacionBombeo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoServicioEstacionBombeo::$rules);

        $tipoServicioEstacionBombeo = TipoServicioEstacionBombeo::create($request->all());

        return redirect()->route('tipo-servicio-estacion-bombeos.index')
            ->with('success', 'TipoServicioEstacionBombeo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoServicioEstacionBombeo = TipoServicioEstacionBombeo::find($id);

        return view('tipo-servicio-estacion-bombeo.show', compact('tipoServicioEstacionBombeo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoServicioEstacionBombeo = TipoServicioEstacionBombeo::find($id);

        return view('tipo-servicio-estacion-bombeo.edit', compact('tipoServicioEstacionBombeo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoServicioEstacionBombeo $tipoServicioEstacionBombeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoServicioEstacionBombeo $tipoServicioEstacionBombeo)
    {
        request()->validate(TipoServicioEstacionBombeo::$rules);

        $tipoServicioEstacionBombeo->update($request->all());

        return redirect()->route('tipo-servicio-estacion-bombeos.index')
            ->with('success', 'TipoServicioEstacionBombeo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoServicioEstacionBombeo = TipoServicioEstacionBombeo::find($id)->delete();

        return redirect()->route('tipo-servicio-estacion-bombeos.index')
            ->with('success', 'TipoServicioEstacionBombeo deleted successfully');
    }
}
