@extends('layouts.main')

@section('content')
    <div class="card my-3 p-3">
        <a href="{{ route('products.index') }}">Home</a>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <figure>
                <img src="{{ $product->image }}" alt="">
            </figure>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <h6>Prezzo: {{ $product->price }}€</h6>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href='{{ route('products.edit', $product->id) }}' class="btn btn-secondary me-2">Modifica</a>
            <a href='{{ route('products.destroy', $product->id) }}' class="btn btn-danger">Elimina</a>
        </div>
    </div>
@endsection
