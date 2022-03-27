@extends('layouts.main')

@section('content')
    <div class="container">
        <figure>
            <img src="{{ $product->image }}" alt="">
        </figure>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <div>{{ $product->price }}</div>
        <a href="{{ route('products.index') }}">Home</a>
        <a href='{{ route('products.edit', $product->id) }}'
            class="btn btn-danger">Modifica</a>
    </div>
@endsection
