<?php

namespace App\Http\Controllers;
use App\Models\Valvulas;
use Illuminate\Http\Request;

class ValvulasController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:ver-valvulas|crear-valvulas|editar-valvulas|borrar-valvulas', ['only' => ['index']]);
        $this->middleware('permission:crear-valvulas', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-valvulas', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-valvulas', ['only' => ['destroy']]);
    }
 public function index()
    {
        $valvulas = Valvulas::paginate();
        return view('valvulas.index', compact('valvulas'))
            ->with('i', (request()->input('page', 1) - 1) * $valvulas->perPage());
    }
   
    public function create()
    {
   
    }

 
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
