<?php

namespace App\Http\Controllers;

use App\Models\Valvula;
use Illuminate\Http\Request;

/**
 * Class ValvulaController
 * @package App\Http\Controllers
 */
class ValvulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valvulas = Valvula::paginate();

        return view('valvula.index', compact('valvulas'))
            ->with('i', (request()->input('page', 1) - 1) * $valvulas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valvula = new Valvula();
        return view('valvula.create', compact('valvula'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Valvula::$rules);

        $valvula = Valvula::create($request->all());

        return redirect()->route('valvulas.index')
            ->with('success', 'Valvula created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valvula = Valvula::find($id);

        return view('valvula.show', compact('valvula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valvula = Valvula::find($id);

        return view('valvula.edit', compact('valvula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Valvula $valvula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valvula $valvula)
    {
        request()->validate(Valvula::$rules);

        $valvula->update($request->all());

        return redirect()->route('valvulas.index')
            ->with('success', 'Valvula updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valvula = Valvula::find($id)->delete();

        return redirect()->route('valvulas.index')
            ->with('success', 'Valvula deleted successfully');
    }
}
