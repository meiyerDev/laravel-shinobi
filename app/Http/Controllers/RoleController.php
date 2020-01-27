<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\{Role,Permission};
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles.create')->only(['create','store|']);
        $this->middleware('can:roles.index')->only(['index']);
        $this->middleware('can:roles.edit')->only(['edit','update']);
        $this->middleware('can:roles.show')->only(['show']);
        $this->middleware('can:roles.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->all());

        // actualizar permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit',$role->id)
            ->with('info','Rol Guardado con Éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::get();
        
        return view('roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        // actualiza el roles
        $role->update($request->all());
        
        // actualizar permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit',$role->id)
            ->with('info','Rol Actualizado con Éxito!');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('info','Eliminado Correctamente!');
    }
}
