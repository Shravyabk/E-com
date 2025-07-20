<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <h2>Welcome, {{ Auth::user()->name }}</h2>

    {{-- Success message after adding to cart --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Product listing --}}
    @foreach($products as $product)
        <div style="border: 1px solid #ccc; padding: 10px; margin: 10px;">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <p>Category: {{ $product->category }}</p>
            <p>Price: ₹{{ $product->price }}</p>

            {{-- Add to Cart button --}}
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    @endforeach

</body>
</html>
