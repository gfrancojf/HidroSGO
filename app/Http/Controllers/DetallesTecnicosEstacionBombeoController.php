<?php

namespace App\Http\Controllers;

use App\Models\DetallesTecnicosEstacionBombeo;
use Illuminate\Http\Request;

/**
 * Class DetallesTecnicosEstacionBombeoController
 * @package App\Http\Controllers
 */
class DetallesTecnicosEstacionBombeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesTecnicosEstacionBombeos = DetallesTecnicosEstacionBombeo::paginate();

        return view('detalles-tecnicos-estacion-bombeo.index', compact('detallesTecnicosEstacionBombeos'))
            ->with('i', (request()->input('page', 1) - 1) * $detallesTecnicosEstacionBombeos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallesTecnicosEstacionBombeo = new DetallesTecnicosEstacionBombeo();
        return view('detalles-tecnicos-estacion-bombeo.create', compact('detallesTecnicosEstacionBombeo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallesTecnicosEstacionBombeo::$rules);

        $detallesTecnicosEstacionBombeo = DetallesTecnicosEstacionBombeo::create($request->all());

        return redirect()->route('detalles-tecnicos-estacion-bombeos.index')
            ->with('success', 'DetallesTecnicosEstacionBombeo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesTecnicosEstacionBombeo = DetallesTecnicosEstacionBombeo::find($id);

        return view('detalles-tecnicos-estacion-bombeo.show', compact('detallesTecnicosEstacionBombeo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallesTecnicosEstacionBombeo = DetallesTecnicosEstacionBombeo::find($id);

        return view('detalles-tecnicos-estacion-bombeo.edit', compact('detallesTecnicosEstacionBombeo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallesTecnicosEstacionBombeo $detallesTecnicosEstacionBombeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesTecnicosEstacionBombeo $detallesTecnicosEstacionBombeo)
    {
        request()->validate(DetallesTecnicosEstacionBombeo::$rules);

        $detallesTecnicosEstacionBombeo->update($request->all());

        return redirect()->route('detalles-tecnicos-estacion-bombeos.index')
            ->with('success', 'DetallesTecnicosEstacionBombeo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallesTecnicosEstacionBombeo = DetallesTecnicosEstacionBombeo::find($id)->delete();

        return redirect()->route('detalles-tecnicos-estacion-bombeos.index')
            ->with('success', 'DetallesTecnicosEstacionBombeo deleted successfully');
    }
}
