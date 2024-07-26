@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>{{__('Product List')}}</h1>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-md-12">
			<a href="{{route('products.create')}}" class="btn-success">{{__('Create Product')}}</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped table-bordered" width="100%">
				<thead>
					<tr>
						<th>{{__('Name')}}</th>
						<th>{{__('Quantity')}}</th>
						<th>{{__('Buying Price')}}</th>
						<th>{{__('Selling Price')}}</th>
						<th>{{__('Description')}}</th>
						<th>{{__('Actions')}}</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{$product->name}}</td>
						<td>{{$product->quantity}}</td>
						<td>{{$product->buyingPrice}}</td>
						<td>{{$product->sellingPrice}}</td>
						<td>{{$product->description}}</td>
						<td>
							<a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary editButton">Edit</a>
							<form method="POST" action="{{ route('products.destroy', $product->id)}}" style=" display: inline;">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger deleteButton" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
							</form>
						</td>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection