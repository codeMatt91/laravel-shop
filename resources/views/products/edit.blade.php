@extends('layouts.main')
@section('content')
    <div class="container py-5">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $product->name) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description"
                            name="description"
                            value="{{ old('description', $product->description) }}">
                    </div>
                </div>
                <div class="col-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="price" class="form-control" id="price" name="price"
                        value="{{ old('price', $product->price) }}">
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="image" class="form-label">Link Image</label>
                        <input type="text" class="form-control" id="image" name="image"
                            value="{{ old('image', $product->image) }}">
                    </div>
                </div>
                <div class="col-2">
                    <img src="https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-vector-picture-icon-png-image_695350.jpg"
                        alt="placeholder" class="img-fluid" width="100px" id="preview">
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center p-3">
                        <button type="reset" class="btn btn-danger me-2">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
