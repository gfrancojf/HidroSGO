<?php

namespace App\Http\Controllers;

use App\Models\Bomba;
use Illuminate\Http\Request;

/**
 * Class BombaController
 * @package App\Http\Controllers
 */
class BombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bombas = Bomba::paginate();

        return view('bomba.index', compact('bombas'))
            ->with('i', (request()->input('page', 1) - 1) * $bombas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bomba = new Bomba();
        return view('bomba.create', compact('bomba'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bomba::$rules);

        $bomba = Bomba::create($request->all());

        return redirect()->route('bombas.index')
            ->with('success', 'Bomba created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bomba = Bomba::find($id);

        return view('bomba.show', compact('bomba'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bomba = Bomba::find($id);

        return view('bomba.edit', compact('bomba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bomba $bomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bomba $bomba)
    {
        request()->validate(Bomba::$rules);

        $bomba->update($request->all());

        return redirect()->route('bombas.index')
            ->with('success', 'Bomba updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bomba = Bomba::find($id)->delete();

        return redirect()->route('bombas.index')
            ->with('success', 'Bomba deleted successfully');
    }
}
