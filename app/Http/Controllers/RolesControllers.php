<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// SE AGREGO EL MODELO DE ROLES Y PERMISOS
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

//////////////////////////////////////////
class RolesControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:ver-roles|crear-roles|editar-roles|borrar-roles', ['only' => ['index']]);
        $this->middleware('permission:crear-roles', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-roles', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-roles', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Con paginación
        $roles = Role::paginate(5);

        return view('roles.index', compact('roles'));
        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo
        //{!! $roles->links() !!}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();

        return view('roles.crear', compact('permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('roles.editar', compact('role', 'permission', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        DB::table('roles')->where('id', $id)->delete();

        return redirect()->route('roles.index');
    }
}
