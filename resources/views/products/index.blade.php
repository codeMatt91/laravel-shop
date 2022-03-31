@extends('layouts.main')

@section('content')
    <div class="d-flex flex-wrap justify-content-between">

        @foreach ($products as $product)
            <div class="card p-4 m-2 d-flex flex-column justify-content-between">
                <figure>
                    <img src="{{ $product->image }}" style="width: 200px" alt="">
                </figure>
                <h2>{{ $product->name }}</h2>
                <h6>Prezzo: {{ $product->price }}€</h6>
                <div>Marca: {{ $product->brand->name }}
                    <img width="50" src="{{ $product->brand->image }}" alt="{{ $product->brand->name }}">
                </div>
                <div style="width:10; height:10; background-color:{{ $product->color_id }}">
                </div>
                <div class="d-flex justify-content-end align-items-center my-2">
                    <a class="btn btn-sm btn-secondary me-2"
                        href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
                    <a class="btn btn-sm btn-warning me-2" href="{{ route('products.edit', $product->id) }}"
                        style="width: 50px">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger" type="submit" style="width: 50px">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>


    </div>
@endsection
