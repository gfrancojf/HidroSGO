<?php

namespace App\Http\Controllers;

use App\Models\UbicacionGeografica;
use Illuminate\Http\Request;

/**
 * Class UbicacionGeograficaController
 * @package App\Http\Controllers
 */
class UbicacionGeograficaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicacionGeograficas = UbicacionGeografica::paginate();

        return view('ubicacion-geografica.index', compact('ubicacionGeograficas'))
            ->with('i', (request()->input('page', 1) - 1) * $ubicacionGeograficas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubicacionGeografica = new UbicacionGeografica();
        return view('ubicacion-geografica.create', compact('ubicacionGeografica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UbicacionGeografica::$rules);

        $ubicacionGeografica = UbicacionGeografica::create($request->all());

        return redirect()->route('ubicacion-geograficas.index')
            ->with('success', 'UbicacionGeografica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicacionGeografica = UbicacionGeografica::find($id);

        return view('ubicacion-geografica.show', compact('ubicacionGeografica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ubicacionGeografica = UbicacionGeografica::find($id);

        return view('ubicacion-geografica.edit', compact('ubicacionGeografica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UbicacionGeografica $ubicacionGeografica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UbicacionGeografica $ubicacionGeografica)
    {
        request()->validate(UbicacionGeografica::$rules);

        $ubicacionGeografica->update($request->all());

        return redirect()->route('ubicacion-geograficas.index')
            ->with('success', 'UbicacionGeografica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ubicacionGeografica = UbicacionGeografica::find($id)->delete();

        return redirect()->route('ubicacion-geograficas.index')
            ->with('success', 'UbicacionGeografica deleted successfully');
    }
}
