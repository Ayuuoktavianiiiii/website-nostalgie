@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <div class="card">
        <div class="card-body">
            <p>{{ $product->description }}</p>
            <p>Harga: Rp{{ number_format($product->price, 2) }}</p>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
            </form>
        </div>
    </div>
</div>
@endsection