@extends('layout')
@section('contenido')
<div class="row">
	
	<div class="col-md-8">
		<a href="{{ route('products.edit', $product->id) }}" class="btn btn-info float-md-right">Editar producto</a>
		<h1>
			{{$product->name}}
		</h1>
		<p>
			<strong>Teléfono:</strong>
			{{$product->phone}}

		</p>
		<h5>Descripción</h5>
		<p>
			{{ $product->short }}
		</p>
		<p>
			{{$product->body}}
		</p>

	</div>
	<div class="col-md-4">
		Mensajes
	</div>
</div>
@endsection