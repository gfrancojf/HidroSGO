<?php

namespace App\Http\Controllers;

use App\Models\Hidrologica;
use Illuminate\Http\Request;

/**
 * Class HidrologicaController
 * @package App\Http\Controllers
 */
class HidrologicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function __construct()
    {
        $this->middleware('permission:ver-hidrologicas|crear-hidrologicas|editar-hidrologicas|borrar-hidrologicas', ['only' => ['index']]);
        $this->middleware('permission:crear-hidrologicas', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-hidrologicas', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-hidrologicas', ['only' => ['destroy']]);
    }

    public function index()
    {
        $hidrologicas = Hidrologica::paginate();

        return view('hidrologica.index', compact('hidrologicas'))
            ->with('i', (request()->input('page', 1) - 1) * $hidrologicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hidrologica = new Hidrologica();
        return view('hidrologica.create', compact('hidrologica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hidrologica::$rules);

        $hidrologica = Hidrologica::create($request->all());

        return redirect()->route('hidrologicas.index')
            ->with('success', 'Hidrologica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hidrologica = Hidrologica::find($id);

        return view('hidrologica.show', compact('hidrologica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hidrologica = Hidrologica::find($id);

        return view('hidrologica.edit', compact('hidrologica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hidrologica $hidrologica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hidrologica $hidrologica)
    {
        request()->validate(Hidrologica::$rules);

        $hidrologica->update($request->all());

        return redirect()->route('hidrologicas.index')
            ->with('success', 'Hidrologica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hidrologica = Hidrologica::find($id)->delete();

        return redirect()->route('hidrologicas.index')
            ->with('success', 'Hidrologica deleted successfully');
    }
}
