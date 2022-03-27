@extends('layouts.main')

@section('content')
    <div class="container">


        @foreach ($products as $product)
            <div class="card p-5">
                <figure>
                    <img src="{{ $product->image }}" alt="">
                </figure>
                <h2>{{ $product->name }}</h2>
                <div>{{ $product->price }}</div>
                <a
                    href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
                <a class="btn btn-sm btn-warning"
                    href="{{ route('products.edit', $product->id) }}">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <form action="{{ route('products.destroy', $product->id) }}"
                    method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger" type="submit">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
        @endforeach


    </div>


    </div>
@endsection
