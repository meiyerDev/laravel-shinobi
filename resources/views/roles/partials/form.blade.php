<div class="form-group">
	{{ Form::label('name','Nombre') }}
	{{ Form::text('name',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('slug','Url Amigable') }}
	{{ Form::text('slug',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description','Descripción') }}
	{{ Form::textarea('description',null,['class'=>'form-control']) }}
</div>
<hr>
<h3>Permiso Especial</h3>
<div class="form-group">
	<label>
		{{ Form::radio('special','all-access') }}
		Acceso Total
	</label>

	<label>
		{{ Form::radio('special','no-access') }}
		Sin Acceso
	</label>
</div>
<h3>Lista de Permisos</h3>
<div class="form-group">
	<ul class="list-group">
		@foreach($permissions as $permission)
		<li class="list-group-item form-check-inline">
			<label>
				{{ Form::checkbox('permissions[]', $permission->id, null) }}
				{{ $permission->name }}
				<em>({{ $permission->description ?: 'Sin descripción' }})</em>
			</label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('GUARDAR',['class'=>'btn btn-sm btn-outline-primary']) }}
</div>