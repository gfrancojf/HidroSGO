<?php

namespace App\Http\Controllers;

use App\Models\DiqueToma;
use Illuminate\Http\Request;

/**
 * Class DiqueTomaController
 * @package App\Http\Controllers
 */
class DiqueTomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:ver-users|crear-users|editar-users|borrar-users', ['only' => ['index']]);
         $this->middleware('permission:crear-users', ['only' => ['create','store']]);
         $this->middleware('permission:editar-users', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-users', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $diqueTomas = DiqueToma::paginate();

        return view('dique-toma.index', compact('diqueTomas'))
            ->with('i', (request()->input('page', 1) - 1) * $diqueTomas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diqueToma = new DiqueToma();
        return view('dique-toma.create', compact('diqueToma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DiqueToma::$rules);

        $diqueToma = DiqueToma::create($request->all());

        return redirect()->route('dique-tomas.index')
            ->with('success', 'DiqueToma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diqueToma = DiqueToma::find($id);

        return view('dique-toma.show', compact('diqueToma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diqueToma = DiqueToma::find($id);

        return view('dique-toma.edit', compact('diqueToma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DiqueToma $diqueToma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiqueToma $diqueToma)
    {
        request()->validate(DiqueToma::$rules);

        $diqueToma->update($request->all());

        return redirect()->route('dique-tomas.index')
            ->with('success', 'DiqueToma updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $diqueToma = DiqueToma::find($id)->delete();

        return redirect()->route('dique-tomas.index')
            ->with('success', 'DiqueToma deleted successfully');
    }
}
