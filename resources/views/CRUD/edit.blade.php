@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>{{__('Edit Product')}}</h1>
		<form method="POST" action="{{ route('products.update', $product->id)}}">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-md-3">
					<label for="name">{{__('Name:')}}</label>
					<input type="text" name="name" class="form-control" value="{{ old('name', $product->name)}}">
				</div>

				<div class="col-md-3">
					<label for="quantity">{{__('Quantity:')}}</label>
					<input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity)}}">
				</div>

				<div class="col-md-3">
					<label for="buyingPrice">{{__('Buying Price:')}}</label>
					<input type="number" name="buyingPrice" class="form-control" value="{{ old('buyingPrice', $product->buyingPrice)}}">
				</div>

				<div class="col-md-3">
					<label for="sellingPrice">{{__('Selling Price:')}}</label>
					<input type="text" name="sellingPrice" class="form-control" value="{{ old('sellingPrice', $product->sellingPrice)}}">
				</div>

				<div class="col-md-3">
					<label for="image_url">{{__('Image Url:')}}</label>
					<input type="text" name="image_url" class="form-control" value="{{ old('image_url', $product->image_url)}}">
				</div>

				<div class="col-md-3">
					<label for="weight">{{__('Weight:')}}</label>
					<input type="number" name="weight" class="form-control" value="{{ old('weight', $product->weight)}}">
				</div>

				<div class="col-md-3">
					<label for="description">{{__('Description:')}}</label>
					<textarea name="description" class="form-control">{{ old('description', $product->description)}}</textarea>
					
				</div>
			</div>
			<button type="submit" class="btn btn-primary">{{__('Update')}}</button>
		</form>
	</div>
@endsection