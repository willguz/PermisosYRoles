<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(15);

        return view('roles/index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $permissions = Permission::get();
      return view('roles/crear_rol', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rol = Role::create($request->all());

      // Actualizar permisos
      $rol->permissions()->sync($request->get('permissions'));

      return redirect()->route('crear_rol')->with('info', 'Rol creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Role $rol)
    {
        return view('roles/ver_rol', compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $rol)
    {
      $permissions = Permission::get();      
      return view('roles/editar_rol', compact('rol', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $rol)
    {
        // Actualizar Rol
        $rol->update($request->all());

        //Actualizar permisos
        $rol->permissions()->sync($request->get('permissions'));
        return redirect()->route('editar_rol', $rol->id)->with('info', 'Rol actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $rol)
    {
        $rol->delete();

        return back()->with('info', 'Eliminado corrrectamente');
    }
}
