<?php

namespace App\Http\Controllers;

use App\Models\HidrologicasEstado;
use Illuminate\Http\Request;

/**
 * Class HidrologicasEstadoController
 * @package App\Http\Controllers
 */
class HidrologicasEstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('permission:ver-hidrologicas_estados|crear-hidrologicas_estados|editar-hidrologicas_estados|borrar-hidrologicas_estados', ['only' => ['index']]);
        $this->middleware('permission:crear-hidrologicas_estados', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-hidrologicas_estados', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-hidrologicas_estados', ['only' => ['destroy']]);
    }

    public function index()
    {
        $hidrologicasEstados = HidrologicasEstado::paginate();

        return view('hidrologicas-estado.index', compact('hidrologicasEstados'))
            ->with('i', (request()->input('page', 1) - 1) * $hidrologicasEstados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hidrologicasEstado = new HidrologicasEstado();
        return view('hidrologicas-estado.create', compact('hidrologicasEstado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HidrologicasEstado::$rules);

        $hidrologicasEstado = HidrologicasEstado::create($request->all());

        return redirect()->route('hidrologicas-estados.index')
            ->with('success', 'HidrologicasEstado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hidrologicasEstado = HidrologicasEstado::find($id);

        return view('hidrologicas-estado.show', compact('hidrologicasEstado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hidrologicasEstado = HidrologicasEstado::find($id);

        return view('hidrologicas-estado.edit', compact('hidrologicasEstado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HidrologicasEstado $hidrologicasEstado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HidrologicasEstado $hidrologicasEstado)
    {
        request()->validate(HidrologicasEstado::$rules);

        $hidrologicasEstado->update($request->all());

        return redirect()->route('hidrologicas-estados.index')
            ->with('success', 'HidrologicasEstado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hidrologicasEstado = HidrologicasEstado::find($id)->delete();

        return redirect()->route('hidrologicas-estados.index')
            ->with('success', 'HidrologicasEstado deleted successfully');
    }
}
