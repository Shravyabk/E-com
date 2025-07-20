@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Products</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">₹{{ $product->price }}</p>
                        <p class="card-text">{{ $product->category }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
        @extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>
    @foreach($cartItems as $item)
        <div>
            <h4>{{ $item->product->name }}</h4>
            <p>Quantity: {{ $item->quantity }}</p>
            <p>Price: ₹{{ $item->product->price }}</p>
        </div>
    @endforeach
@endsection

    </div>
</div>
@endsection
