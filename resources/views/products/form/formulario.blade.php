<div class="form-group">
  {{ Form::label('nombre', 'Nombre de la etiqueta') }}
  {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
  {{ Form::label('descripcion', 'Descripción') }}
  {{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>