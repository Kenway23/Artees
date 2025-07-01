<div class="col-md-2 mb-4">
    <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
            <img src="{{ $product->image_url }}" alt="produk" class="card-img-top"
                style="height: 200px; object-fit: cover; width: 100%;">

            <div class="card-body text-center">
                <h6 class="card-title text-capitalize">{{ $product->name }}</h6>
                <p class="text-muted mb-1">{{ $product->category }}</p>
                <strong>Rp. {{ number_format($product->price, 0, ',', '.') }}</strong>
            </div>
        </div>
    </a>
</div>
