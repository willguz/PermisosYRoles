@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Productos
                  @can('products.create')
                  <a class="btn btn-primary float-right btn-sm" href="{{ route('crear_producto') }}">crear</a>
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
                        @foreach($products as $producto)
                        <tr>
                          <th scope="row">{{ $producto->id }}</th>
                          <td>{{ $producto->nombre }}</td>
                          <td width="10px">
                            @can('productos.show')
                            <a class="btn btn-info btn-sm" href="{{ route('verProducto', $producto->id) }}">Ver</a>
                            @endcan
                          </td>
                          <td width="10px">
                            @can('productos.edit')
                            <a class="btn btn-warning btn-sm" href="{{ route('editarProducto', $producto->id) }}" >Editar</a>
                            @endcan
                          </td>
                          <td width="10px">
                            @can('productos.destroy')
                            {!! Form::open(['route' => ['eliminarProducto', $producto->id], 'method' => 'delete']) !!}
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            {!! Form::close() !!}
                            @endcan
                          </td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
