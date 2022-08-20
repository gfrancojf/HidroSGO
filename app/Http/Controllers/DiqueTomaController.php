<?php

namespace App\Http\Controllers;

use App\Models\DiqueToma;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use DB;
use Illuminate\Http\Request;

/**
 * Class DiqueTomaController
 */
class DiqueTomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:ver-diquetoma|crear-diquetoma|editar-diquetoma|borrar-diquetoma', ['only' => ['index']]);
        $this->middleware('permission:crear-diquetoma', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-diquetoma', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-diquetoma', ['only' => ['destroy']]);
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

        $estados = Estado::get()->all();
        return view('dique-toma.create',['diqueToma' => $diqueToma, 'estados' => $estados]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        DB::enableQueryLog();
        // dd($id);
        $diqueToma = DiqueToma::join('estados as id_estado','id_estado.id','dique_tomas.estado')
        ->join('municipios','municipios.id','dique_tomas.municipio')
        ->join('parroquias','parroquias.id','dique_tomas.parroquia')
        ->join('acueductos','acueductos.id','dique_tomas.acueducto')
        ->find($id);
        // ->where('dique_tomas.id','=',$id)->get();
        // dd($id);

        $q = DB::getQueryLog();
        // dd($q, $diqueToma);

        $estados = Estado::get()->all();
        // dd($diqueToma, $estados);

        return view('dique-toma.edit', ['diqueToma' => $diqueToma, 'estados' => $estados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  DiqueToma  $diqueToma
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
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $diqueToma = DiqueToma::find($id)->delete();

        return redirect()->route('dique-tomas.index')
            ->with('success', 'DiqueToma deleted successfully');
    }
}
