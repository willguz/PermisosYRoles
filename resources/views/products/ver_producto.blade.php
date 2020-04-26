@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Productos                  
        </div>
        <div class="card-body">
          <p><strong>Nombre</strong>     {{ $product->nombre }}</p>
          <p><strong>Descripción</strong>  {{ $product->descripcion }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
