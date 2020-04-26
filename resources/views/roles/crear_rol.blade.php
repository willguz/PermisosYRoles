@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Roles
                </div>
                <div class="card-body">                   
                    {{ Form::open(['route' => 'crearRol']) }}

                        @include('roles.form.formulario')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection