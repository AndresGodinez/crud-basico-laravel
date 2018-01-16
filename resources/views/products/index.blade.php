@extends('layout')
@section('contenido')
<div class="row">
	
	<div class="col-md-8">
		<a href="{{ route('products.create') }}" class="btn btn-info float-md-rigth">Nuevo producto</a>

		<table class="table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">id</th>
					<th>Nombre</th>
					<th>Teléfono</th>
					<th colspan="3"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->name}}</td>
					<td>{{$product->phone}}</td>
					<td>
						<a href="{{ route('products.show', [$product->id]) }}" class="btn btn-info">
							Descripción
						</a>
					</td>
					<td>
						<a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-primary">
							Actualizar
						</a>
					</td>
					<td>
						<a href="{{ route('products.destroy', [$product->id]) }}" class="btn btn-danger">
							Eliminar
						</a>
					</td>
					
				</tr>
				@endforeach
			</tbody>
			
		</table>
		<br><br>
		{!! $products->render() !!}

	</div>
	<div class="col-md-4">
		Mensajes
	</div>
</div>
@endsection