<?php

namespace App\Http\Controllers;

use App\Models\TipoInfraestructura;
use Illuminate\Http\Request;

/**
 * Class TipoInfraestructuraController
 * @package App\Http\Controllers
 */
class TipoInfraestructuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $tipoInfraestructuras = TipoInfraestructura::paginate();

        return view('tipo-infraestructura.index', compact('tipoInfraestructuras'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoInfraestructuras->perPage());
=======
        $tipoinfraestructuras = TipoInfraestructura::paginate();
        return view('tipoinfraestructura.index', compact('tipoinfraestructuras'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoinfraestructuras->perPage());
>>>>>>> franco
    }

    
    public function create()
    {
<<<<<<< HEAD
        $tipoInfraestructura = new TipoInfraestructura();
        return view('tipo-infraestructura.create', compact('tipoInfraestructura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoInfraestructura::$rules);

        $tipoInfraestructura = TipoInfraestructura::create($request->all());

        return redirect()->route('tipo-infraestructuras.index')
            ->with('success', 'TipoInfraestructura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoInfraestructura = TipoInfraestructura::find($id);

        return view('tipo-infraestructura.show', compact('tipoInfraestructura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
=======
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
>>>>>>> franco
    {
        $tipoInfraestructura = TipoInfraestructura::find($id);

        return view('tipo-infraestructura.edit', compact('tipoInfraestructura'));
    }

<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoInfraestructura $tipoInfraestructura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoInfraestructura $tipoInfraestructura)
    {
        request()->validate(TipoInfraestructura::$rules);

        $tipoInfraestructura->update($request->all());

        return redirect()->route('tipo-infraestructuras.index')
            ->with('success', 'TipoInfraestructura updated successfully');
=======
 
    public function update(Request $request, TipoInfraestructura $tipoInfraestructura)
    {
        //

>>>>>>> franco
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoInfraestructura = TipoInfraestructura::find($id)->delete();

        return redirect()->route('tipo-infraestructuras.index')
            ->with('success', 'TipoInfraestructura deleted successfully');
    }
}
