@extends('layout')
@section('contenido')
<div class="col-md-6">
	<form action="{{ route('products.store') }}" method="POST">
		@include('products.fragments.error')
		{{ csrf_field() }}
		<div class="form-group">
			<label> Nombre</label>
			<input type="text" name="name" class="form-control" >
			<label> Teléfono</label>
			<input type="text" name="phone" class="form-control" >
			<label> Descripción breve</label>
			<input type="text" name="short" class="form-control" >
			<label>Descripción</label>
			<input type="textarea" name="body" class="form-control" >
			<br>
			<input type="submit" value="Enviar" class="btn btn-info">
		</div>
	</form>
	
</div>
@endsection