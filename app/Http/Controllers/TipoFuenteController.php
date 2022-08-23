<?php

namespace App\Http\Controllers;

use App\Models\TipoFuente;
use Illuminate\Http\Request;

/**
 * Class TipoFuenteController
 */
class TipoFuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:ver-tipofuente|crear-tipofuente|editar-tipofuente|borrar-tipofuente', ['only' => ['index']]);
        $this->middleware('permission:crear-tipofuente', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-tipofuente', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-tipofuente', ['only' => ['destroy']]);
    }

    public function index()
    {
        $tipoFuentes = TipoFuente::paginate();

        return view('tipo-fuente.index', compact('tipoFuentes'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoFuentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoFuente = new TipoFuente();

        return view('tipo-fuente.create', compact('tipoFuente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoFuente::$rules);

        $tipoFuente = TipoFuente::create($request->all());

        return redirect()->route('tipo-fuentes.index')
            ->with('success', 'TipoFuente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoFuente = TipoFuente::find($id);

        return view('tipo-fuente.show', compact('tipoFuente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoFuente = TipoFuente::find($id);

        return view('tipo-fuente.edit', compact('tipoFuente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  TipoFuente  $tipoFuente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoFuente $tipoFuente)
    {
        request()->validate(TipoFuente::$rules);

        $tipoFuente->update($request->all());

        return redirect()->route('tipo-fuentes.index')
            ->with('success', 'TipoFuente updated successfully');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoFuente = TipoFuente::find($id)->delete();

        return redirect()->route('tipo-fuentes.index')
            ->with('success', 'TipoFuente deleted successfully');
    }
}
