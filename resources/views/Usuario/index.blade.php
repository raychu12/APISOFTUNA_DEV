@extends('layouts.Admin')

@section('title', 'Listado de usuarios')

@section('content')

@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>


@endif

   

<table class="table table-striped">
  <thead>
  	<th>Cedula</th>
  	<th>Nombre</th>
  	<th>Apellido1</th>
    <th>Apellido2</th>
  	<th>Telefono</th>
  	<th>Correo</th>
    <th>Direccion</th>
  	<th>FechaIngreso</th>
  	<th>Clave</th>
    <th>Genero</th>
  	<th>Rol</th>
  	
  	<th>Acciones</th>
  
  	

  </thead>

  <tbody>
  	<tr>
  		@foreach ($users as $user)
  		<td>{{$user->Cedula}}</td>
  		<td>{{$user->Nombre}}</td>
          <td>{{$user->Apellido1}}</td>
  		<td>{{$user->Apellido2}}</td>
          <td>{{$user->Telefono}}</td>
  		<td>{{$user->Correo}}</td>
          <td>{{$user->Direccion}}</td>
  		<td>{{$user->FechaIngreso}}</td>
          <td>{{$user->Clave}}</td>
  		<td>{{$user->Genero}}</td>
  		<td>{{$user->Rol}}</td>
  		<td><a class="btn btn-success" href="{{route('Usuario.edit', $user->id)}}" role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{route('Usuario.destroy', $user->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $users->render() !!}





@endsection