<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<a href="/products">{{__('Products')}}</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function($) {
        // Start Show Validation Error messages==========================================================
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                $.notify("{{ $error }}", "error");
            @endforeach
        @endif
        // End Show Validation Error messages==========================================================

        // Start Show Success message ====================================================================
        @if (session('success'))
            $.notify("{{ session('success') }}", "success");
        @endif
        // End Show Success message ====================================================================
    });
</script>
</body>
</html>