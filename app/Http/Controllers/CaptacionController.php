<?php

namespace App\Http\Controllers;

use App\Models\Captacion;
use Illuminate\Http\Request;

/**
 * Class CaptacionController
 * @package App\Http\Controllers
 */
class CaptacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $captacions = Captacion::paginate();

        return view('captacion.index', compact('captacions'))
            ->with('i', (request()->input('page', 1) - 1) * $captacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $captacion = new Captacion();
        return view('captacion.create', compact('captacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Captacion::$rules);

        $captacion = Captacion::create($request->all());

        return redirect()->route('captacions.index')
            ->with('success', 'Captacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $captacion = Captacion::find($id);

        return view('captacion.show', compact('captacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $captacion = Captacion::find($id);

        return view('captacion.edit', compact('captacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Captacion $captacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Captacion $captacion)
    {
        request()->validate(Captacion::$rules);

        $captacion->update($request->all());

        return redirect()->route('captacions.index')
            ->with('success', 'Captacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $captacion = Captacion::find($id)->delete();

        return redirect()->route('captacions.index')
            ->with('success', 'Captacion deleted successfully');
    }
}
