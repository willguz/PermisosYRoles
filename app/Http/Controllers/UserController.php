<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(15);

        return view('usuarios/index', compact('usuarios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        return view('usuarios/ver_usuario', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
      $roles = Role::get();
      return view('usuarios/editar_usuario', compact('usuario', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->update($request->all());

        $usuario->roles()->sync($request->get('roles'));
        return redirect()->route('editar_usuario', $usuario->id)->with('info', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();

        return back()->with('info', 'Eliminado corrrectamente');
    }
}
