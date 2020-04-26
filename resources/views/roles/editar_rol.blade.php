@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Editar rol
        </div>
        <div class="card-body">                    
                    {!! Form::model($rol, ['route' => ['actualizar_rol', $rol->id],
                    'method' => 'PUT']) !!}

                        @include('roles.form.formulario')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection