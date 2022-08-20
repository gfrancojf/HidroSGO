<?php

namespace App\Http\Controllers;

use App\Models\TomaRio;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use Illuminate\Http\Request;

/**
 * Class TomaRioController
 */
class TomaRioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:ver-tomaRios|crear-tomaRios|editar-tomaRios|borrar-tomaRios', ['only' => ['index']]);
        $this->middleware('permission:crear-tomaRios', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-tomaRios', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-tomaRios', ['only' => ['destroy']]);
    }

    public function index()
    {
        $tomaRios = TomaRio::paginate();

        return view('toma-rio.index', compact('tomaRios'))
            ->with('i', (request()->input('page', 1) - 1) * $tomaRios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tomaRio = new TomaRio();

        $estados = Estado::get()->all();
        return view('toma-rio.create', ['estados' => $estados, 'tomaRio' => $tomaRio]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TomaRio::$rules);

        $tomaRio = TomaRio::create($request->all());

        return redirect()->route('toma-rios.index')
            ->with('success', 'TomaRio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tomaRio = TomaRio::find($id);

        return view('toma-rio.show', compact('tomaRio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tomaRio = TomaRio::find($id);

        return view('toma-rio.edit', compact('tomaRio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  TomaRio  $tomaRio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TomaRio $tomaRio)
    {
        request()->validate(TomaRio::$rules);

        $tomaRio->update($request->all());

        return redirect()->route('toma-rios.index')
            ->with('success', 'TomaRio updated successfully');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tomaRio = TomaRio::find($id)->delete();

        return redirect()->route('toma-rios.index')
            ->with('success', 'TomaRio deleted successfully');
    }
}
