@extends('layouts.Admin')

@section('title','Editar Usuario')

@section('content')

@if(count($errors) >0)
<div class="alert alert-danger" role="alert">
  <ul>
  	@foreach($errors->all() as $error)
  	<li>{{$error}}</li>
  	@endforeach

  </ul>

</div>


@endif

           {!! Form::open(['route' => ['Usuario.update', $user], 'method' => 'PUT']) !!}
				<div class="form-group">
					{!! Form::label('cedula','Cedula') !!}
					{!! Form::text('cedula', $user->cedula,['class' =>'form-control', 'placeholder' =>'Cedula','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('name','Nombre') !!}
					{!! Form::text('name', $user->name,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
				</div>

                <div class="form-group">
					{!! Form::label('apelli1','Apellido1') !!}
					{!! Form::text('Apelli1', $user->Apelli1,['class' =>'form-control', 'placeholder' =>'Primer Apellido','required'])!!}
				</div>

                <div class="form-group">
					{!! Form::label('apelli2','Apellido2') !!}
					{!! Form::text('Apelli2', $user->Apelli2,['class' =>'form-control', 'placeholder' =>'Segundo Apellido','required'])!!}
				</div>
				
                <div class="form-group">
					{!! Form::label('tele','Telefono') !!}
					{!! Form::text('tele', $user->tele,['class' =>'form-control', 'placeholder' =>'telefono','required'])!!}
				</div>

                <div class="form-group">
					{!! Form::label('correo','Correo') !!}
					{!! Form::email('correo', $user->correo,['class' =>'form-control', 'placeholder' =>'Correo','required'])!!}
				</div>

                <div class="form-group">
					{!! Form::label('direc','Direccion') !!}
					{!! Form::text('direc', $user->direc,['class' =>'form-control', 'placeholder' =>'Direccion','required'])!!}
				</div>

                  <div class="form-group">
					{!! Form::label('fechaingreso','FechaIngreso') !!}
					{!! Form::date_add('fechaingreso', $user->fechaingreso,['class' =>'form-control', 'placeholder' =>'Fecha Ingreso','required'])!!}
				</div>

                    
                <div class="form-group">
					{!! Form::label('clave','Clave') !!}
					{!! Form::password_get_info('clave', $user->clave,['class' =>'form-control', 'placeholder' =>'Clave','required'])!!}
				</div>

                <div class="form-group">
					{!! Form::label('genero','Genero') !!}
					{!! Form:: select('genero',[''=>'Seleccione el genero'  ,'1' => 'Mujer','2'=>'Hombre'], $user->genero, ['class'=>'form-control']) !!}
				</div>

                <div class="form-group">
					{!! Form::label('rol','Rol') !!}
					{!! Form:: select('rol',[''=>'Seleccione tipo de Rol'  ,'1' => 'Administrador','2'=>'Usuario'], $user->rol, ['class'=>'form-control']) !!}
				</div>

				
				<div class="form-group">
					{!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}
					
				</div>


			    
			{!! Form::close() !!}

			


			
@endsection			

			
