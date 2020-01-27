<div class="form-group">
	{{ Form::label('name','Nombre') }}
	{{ Form::text('name',null,['class'=>'form-control']) }}
</div>
<hr>
<h3>Lista de Roles</h3>
<div class="form-group">
	<ul class="list-group">
		@foreach($roles as $role)
		<li class="list-group-item form-check-inline">
			<label>
				{{ Form::checkbox('roles[]', $role->id, null) }}
				{{ $role->name }}
				<em>({{ $role->description ?: 'Sin descripción' }})</em>
			</label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('GUARDAR',['class'=>'btn btn-sm btn-outline-primary']) }}
</div>