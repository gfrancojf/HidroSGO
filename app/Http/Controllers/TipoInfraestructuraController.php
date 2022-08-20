<?php

namespace App\Http\Controllers;

use App\Models\TipoInfraestructura;
use Illuminate\Http\Request;

class TipoInfraestructuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoinfraestructuras = TipoInfraestructura::paginate();
        return view('tipoinfraestructura.index', compact('tipoinfraestructuras'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoinfraestructuras->perPage());
    }

    
    public function create()
    {
        $tipoinfraestructura = new TipoInfraestructura();
        return view('tipoinfraestructura.create', compact('tipoinfraestructura'));
    }

   
    public function store(Request $request)
    {
        request()->validate(TipoInfraestructura::$rules);
        $tipoinfraestructura = TipoInfraestructura::create($request->all());
        return redirect()->route('tipoinfraestructuras.index')
            ->with('success', 'TipoInfraestructura created successfully.');
    }

    
    public function show($id)
    {
        $tipoinfraestructura = TipoInfraestructura::find($id);
        return view('tipoinfraestructura.show', compact('tipoinfraestructura'));
    }
   
    public function edit(TipoInfraestructura $tipoInfraestructura)
    {
        //
    }

 
    public function update(Request $request, TipoInfraestructura $tipoInfraestructura)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoInfraestructura  $tipoInfraestructura
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoInfraestructura $tipoInfraestructura)
    {
        //
    }
}
