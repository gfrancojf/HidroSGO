<?php

namespace App\Http\Controllers;

use App\Models\TipoValvula;
use Illuminate\Http\Request;

/**
 * Class TipoValvulaController
 * @package App\Http\Controllers
 */
class TipoValvulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoValvulas = TipoValvula::paginate();

        return view('tipo-valvula.index', compact('tipoValvulas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoValvulas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoValvula = new TipoValvula();
        return view('tipo-valvula.create', compact('tipoValvula'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoValvula::$rules);

        $tipoValvula = TipoValvula::create($request->all());

        return redirect()->route('tipo-valvulas.index')
            ->with('success', 'TipoValvula created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoValvula = TipoValvula::find($id);

        return view('tipo-valvula.show', compact('tipoValvula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoValvula = TipoValvula::find($id);

        return view('tipo-valvula.edit', compact('tipoValvula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoValvula $tipoValvula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoValvula $tipoValvula)
    {
        request()->validate(TipoValvula::$rules);

        $tipoValvula->update($request->all());

        return redirect()->route('tipo-valvulas.index')
            ->with('success', 'TipoValvula updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoValvula = TipoValvula::find($id)->delete();

        return redirect()->route('tipo-valvulas.index')
            ->with('success', 'TipoValvula deleted successfully');
    }
}
