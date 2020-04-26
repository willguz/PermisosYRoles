@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Lista de roles
                  @can('products.create')
                  <a class="btn btn-primary float-right btn-sm" href="{{ route('crear_rol') }}">crear</a>
                  @endcan
                </div>
                <div class="card-body">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col"> </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($roles as $rol)
                        <tr>
                          <th scope="row">{{ $rol->id }}</th>
                          <td>{{ $rol->name }}</td>
                          <td width="10px">
                            @can('roles.show')
                            <a class="btn btn-info btn-sm" href="{{ route('ver_rol', $rol->id) }}">Ver</a>
                            @endcan
                          </td>
                          <td width="10px">
                            @can('roles.edit')
                            <a class="btn btn-warning btn-sm" href="{{ route('editar_rol', $rol->id) }}" >Editar</a>
                            @endcan
                          </td>
                          <td width="10px">
                            @can('roles.destroy')
                            {!! Form::open(['route' => ['eliminar_rol', $rol->id], 'method' => 'delete']) !!}
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            {!! Form::close() !!}
                            @endcan
                          </td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
