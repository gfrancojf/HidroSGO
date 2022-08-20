<?php

namespace App\Http\Controllers;

use App\Models\Acueducto;
use Illuminate\Http\Request;

/**
 * Class AcueductoController
 * @package App\Http\Controllers
 */
class AcueductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acueductos = Acueducto::paginate();

        return view('acueducto.index', compact('acueductos'))
            ->with('i', (request()->input('page', 1) - 1) * $acueductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acueducto = new Acueducto();
        return view('acueducto.create', compact('acueducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Acueducto::$rules);

        $acueducto = Acueducto::create($request->all());

        return redirect()->route('acueductos.index')
            ->with('success', 'Acueducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acueducto = Acueducto::find($id);

        return view('acueducto.show', compact('acueducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acueducto = Acueducto::find($id);

        return view('acueducto.edit', compact('acueducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Acueducto $acueducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acueducto $acueducto)
    {
        request()->validate(Acueducto::$rules);

        $acueducto->update($request->all());

        return redirect()->route('acueductos.index')
            ->with('success', 'Acueducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $acueducto = Acueducto::find($id)->delete();

        return redirect()->route('acueductos.index')
            ->with('success', 'Acueducto deleted successfully');
    }
}
