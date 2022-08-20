<?php

namespace App\Http\Controllers;

use App\Models\Infraestructura;
use Illuminate\Http\Request;

/**
 * Class InfraestructuraController
 */
class InfraestructuraController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:ver-infraestructuras|crear-infraestructuras|editar-infraestructuras|borrar-infraestructuras', ['only' => ['index']]);
        $this->middleware('permission:crear-infraestructuras', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-infraestructuras', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-infraestructuras', ['only' => ['destroy']]);
    }
    public function index()
    {
        $infraestructuras = Infraestructura::paginate();

        return view('infraestructura.index', compact('infraestructuras'))
            ->with('i', (request()->input('page', 1) - 1) * $infraestructuras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infraestructura = new Infraestructura();

        return view('infraestructura.create', compact('infraestructura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       request()->validate(Infraestructura::$rules);
        $infraestructura = Infraestructura::create($request->all());
        return redirect()->route('infraestructuras.index')
            ->with('success', 'Infraestructura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infraestructura = Infraestructura::find($id);

        return view('infraestructura.show', compact('infraestructura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infraestructura = Infraestructura::find($id);

        return view('infraestructura.edit', compact('infraestructura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Infraestructura  $infraestructura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infraestructura $infraestructura)
    {
        request()->validate(Infraestructura::$rules);

        $infraestructura->update($request->all());

        return redirect()->route('infraestructuras.index')
            ->with('success', 'Infraestructura updated successfully');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $infraestructura = Infraestructura::find($id)->delete();

        return redirect()->route('infraestructuras.index')
            ->with('success', 'Infraestructura deleted successfully');
    }
}
