@extends('layout')
@section('contenido')
<div class="col-md-6">
	<form action="{{ route('products.update', $producto->id) }}" method="POST">
		@include('products.fragments.error')
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
		<div class="form-group">
			<label> Nombre</label>
			<input type="text" name="name" class="form-control" value="{{$producto->name}}" >
			<label> Teléfono</label>
			<input type="text" name="phone" class="form-control"  value="{{$producto->phone}} ">
			<label> Descripción breve</label>
			<input type="text" name="short" class="form-control"  value="{{$producto->short}}">
			<label>Descripción</label>
			<input type="textarea" name="body" class="form-control"  value="{{$producto->body}}">
			<br>
			<input type="submit" value="Enviar" class="btn btn-info">
		</div>
	</form>
	
</div>
@endsection