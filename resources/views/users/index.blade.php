@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
	                <div class="card-header">
	                	Users
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
	                			@foreach($users as $user)
	                			<tr>
	                				<td> {{ $user->id }} </td>
	                				<td> {{ $user->name }} </td>
	                				<td>
	                					@can('users.show')
		                				<a href="{{ route('users.show', $user->id) }}"
		                				class="btn btn-sm btn-outline-secondary">
		                					ver
		                				</a>
	                					@endcan
	                				</td>
	                				<td>
	                					@can('users.edit')
		                				<a href="{{ route('users.edit', $user->id) }}"
		                				class="btn btn-sm btn-outline-warning">
		                					editar
		                				</a>
	                					@endcan
	                				</td>
	                				<td>
	                					@can('users.destroy')
		                				{!! Form::open(['route' => ['users.destroy', $user->id],
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
	                	{{ $users->links() }}
	                </div>
            	</div>
			</div>
		</div>
	</div>
@endsection