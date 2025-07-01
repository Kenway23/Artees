@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Gambar Produk -->
        <div class="col-md-5">
            <img src="{{ $product->image_url }}" class="img-fluid rounded" alt="{{ $product->name }}">
        </div>


        <!-- Detail Produk -->
        <div class="col-md-7">
            <h3>{{ $product->name }}</h3>
            <h4 class="text-success">Rp. {{ number_format($product->price, 0, ',', '.') }}</h4>

            {{-- Jika kamu belum punya kolom deskripsi, bisa dihapus --}}
            @if($product->description)
                <p class="mt-3">{{ $product->description }}</p>
            @endif

            <button class="btn btn-success mt-3">+ Tambah ke Keranjang</button>
        </div>
    </div>
</div>
@endsection
