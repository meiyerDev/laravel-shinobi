@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
	                <div class="card-header">
	                	Roles

	                	@can('roles.create')
	                	<a href="{{ route('roles.create') }}"
	                	class="btn btn-sm btn-outline-primary float-righ">
	                		crear
	                	</a>
	                	@endcan
	                </div>

	                <div class="card-body">
	                	<table class="table table-striped table-hover">
	                		<thead>
	                			<tr>
	                				<th width="10px">ID</th>
	                				<th>Nombre</th>
	                				<th colspan="3">&nbsp;</th>
	                			</tr>
	                		</thead>
	                		<tbody>
	                			@foreach($roles as $role)
	                			<tr>
	                				<td> {{ $role->id }} </td>
	                				<td> {{ $role->name }} </td>
	                				<td>
	                					@can('roles.show')
		                				<a href="{{ route('roles.show', $role->id) }}"
		                				class="btn btn-sm btn-outline-secondary">
		                					ver
		                				</a>
	                					@endcan
	                				</td>
	                				<td>
	                					@can('roles.edit')
		                				<a href="{{ route('roles.edit', $role->id) }}"
		                				class="btn btn-sm btn-outline-warning">
		                					editar
		                				</a>
	                					@endcan
	                				</td>
	                				<td>
	                					@can('roles.destroy')
		                				{!! Form::open(['route' => ['roles.destroy', $role->id],
															'method'=> 'DELETE']) !!}
															<button class="btn btn-sm btn-danger">
																eliminar
															</button>
														{!! Form::close() !!}
	                					@endcan
	                				</td>
	                			</tr>
	                			@endforeach
	                		</tbody>
	                	</table>
	                	{{ $roles->links() }}
	                </div>
            	</div>
			</div>
		</div>
	</div>
@endsection