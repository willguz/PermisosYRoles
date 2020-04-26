@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Editar usuarios
        </div>
        <div class="card-body">                    
          {!! Form::model($usuario, ['route' => ['actualizarUsuario', $usuario->id],
          'method' => 'PUT']) !!}

              @include('usuarios.form.formulario')
              
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection