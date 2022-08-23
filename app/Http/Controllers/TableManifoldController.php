<?php

namespace App\Http\Controllers;

use App\Models\TableManifold;
use Illuminate\Http\Request;

/**
 * Class TableManifoldController
 * @package App\Http\Controllers
 */
class TableManifoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableManifolds = TableManifold::paginate();

        return view('table-manifold.index', compact('tableManifolds'))
            ->with('i', (request()->input('page', 1) - 1) * $tableManifolds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tableManifold = new TableManifold();
        return view('table-manifold.create', compact('tableManifold'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TableManifold::$rules);

        $tableManifold = TableManifold::create($request->all());

        return redirect()->route('table-manifolds.index')
            ->with('success', 'TableManifold created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tableManifold = TableManifold::find($id);

        return view('table-manifold.show', compact('tableManifold'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tableManifold = TableManifold::find($id);

        return view('table-manifold.edit', compact('tableManifold'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TableManifold $tableManifold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableManifold $tableManifold)
    {
        request()->validate(TableManifold::$rules);

        $tableManifold->update($request->all());

        return redirect()->route('table-manifolds.index')
            ->with('success', 'TableManifold updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tableManifold = TableManifold::find($id)->delete();

        return redirect()->route('table-manifolds.index')
            ->with('success', 'TableManifold deleted successfully');
    }
}
