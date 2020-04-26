@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Datos del ususario                  
        </div>
        <div class="card-body">
          <p><strong>Nombre</strong>     {{ $usuario->name }}</p>
          <p><strong>Email</strong>  {{ $usuario->email }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
