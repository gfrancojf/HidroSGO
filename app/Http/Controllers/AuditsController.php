<?php

namespace App\Http\Controllers;

use App\Models\audits;

class AuditsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $audits = audits::paginate(1);

        return view('auditoria.index', compact('audits', 'user'));
    }
}
