@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center gap-4 my-4">
        <!-- Handmade -->
        <div class="position-relative" style="width: 300px; height: 200px;">
            <img src="{{ asset('images/handmade.jpg') }}" class="img-fluid rounded shadow w-100 h-100"
                style="object-fit: cover;" alt="Handmade">
            <div
                class="position-absolute top-50 start-50 translate-middle bg-dark bg-opacity-75 text-white px-4 py-2 rounded fw-bold">
                Handmade
            </div>
        </div>

        <!-- Handprint -->
        <div class="position-relative" style="width: 300px; height: 200px;">
            <img src="{{ asset('images/handprint.jpg') }}" class="img-fluid rounded shadow w-100 h-100"
                style="object-fit: cover;" alt="Handprint">
            <div
                class="position-absolute top-50 start-50 translate-middle bg-dark bg-opacity-75 text-white px-4 py-2 rounded fw-bold">
                Handprint
            </div>
        </div>
    </div>




    <h5>Semua Produk</h5>
    <div class="row">
        @foreach ($products as $product)
            @include('components.product-card', ['product' => $product])
        @endforeach
    </div>
@endsection
