@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Lista de usuarios
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
                        @foreach($usuarios as $usuario)
                        <tr>
                          <th scope="row" width="10px">{{ $usuario->id }}</th>
                          <td>{{ $usuario->name }}</td>
                          <td width="10px">
                            @can('users.show')
                            <a class="btn btn-info btn-sm" href="{{ route('ver_usuario', $usuario->id) }}">Ver</a>
                            @endcan
                          </td>
                          <td width="10px">
                            @can('users.edit')
                            <a class="btn btn-warning btn-sm" href="{{ route('editar_usuario', $usuario->id) }}" >Editar</a>
                            @endcan
                          </td>
                          <td width="10px">
                            @can('users.destroy')
                            {!! Form::open(['route' => ['eliminar_usuario', $usuario->id], 'method' => 'delete']) !!}
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            {!! Form::close() !!}
                            @endcan
                          </td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{ $usuarios->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
