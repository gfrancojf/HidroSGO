<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use Illuminate\Http\Request;

/**
 * Class FabricanteController
 * @package App\Http\Controllers
 */
class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fabricantes = Fabricante::paginate();

        return view('fabricante.index', compact('fabricantes'))
            ->with('i', (request()->input('page', 1) - 1) * $fabricantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fabricante = new Fabricante();
        return view('fabricante.create', compact('fabricante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Fabricante::$rules);

        $fabricante = Fabricante::create($request->all());

        return redirect()->route('fabricantes.index')
            ->with('success', 'Fabricante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fabricante = Fabricante::find($id);

        return view('fabricante.show', compact('fabricante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fabricante = Fabricante::find($id);

        return view('fabricante.edit', compact('fabricante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fabricante $fabricante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fabricante $fabricante)
    {
        request()->validate(Fabricante::$rules);

        $fabricante->update($request->all());

        return redirect()->route('fabricantes.index')
            ->with('success', 'Fabricante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fabricante = Fabricante::find($id)->delete();

        return redirect()->route('fabricantes.index')
            ->with('success', 'Fabricante deleted successfully');
    }
}
