<?php

namespace App\Http\Controllers;

use App\Models\TipoPlantum;
use Illuminate\Http\Request;

/**
 * Class TipoPlantumController
 * @package App\Http\Controllers
 */
class TipoPlantumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoPlanta = TipoPlantum::paginate();

        return view('tipo-plantum.index', compact('tipoPlanta'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoPlanta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoPlantum = new TipoPlantum();
        return view('tipo-plantum.create', compact('tipoPlantum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoPlantum::$rules);

        $tipoPlantum = TipoPlantum::create($request->all());

        return redirect()->route('tipo-planta.index')
            ->with('success', 'TipoPlantum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoPlantum = TipoPlantum::find($id);

        return view('tipo-plantum.show', compact('tipoPlantum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoPlantum = TipoPlantum::find($id);

        return view('tipo-plantum.edit', compact('tipoPlantum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoPlantum $tipoPlantum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPlantum $tipoPlantum)
    {
        request()->validate(TipoPlantum::$rules);

        $tipoPlantum->update($request->all());

        return redirect()->route('tipo-planta.index')
            ->with('success', 'TipoPlantum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoPlantum = TipoPlantum::find($id)->delete();

        return redirect()->route('tipo-planta.index')
            ->with('success', 'TipoPlantum deleted successfully');
    }
}
