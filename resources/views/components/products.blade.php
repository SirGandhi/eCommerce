@foreach ($products as $product)
<div class="col-md-3 col-12 pb-3">
    <div class="card">
        <div style="background-image: url('{{ $product->gallery }}');background-size:cover; height: 150px;">

        </div>
        <div class="card-body" >
            <h5 class="card-title m-0 py-3">{{ $product->name }}</h5>
            <p class="card-text m-0">£ {{ $product->small_desc }}</p>
            <a href="/details/{{$product->id}}" class="text-muted">More Details</a>
            <h3 class="card-text m-0 py-3">£ {{ $product->price }}</h3>
            <form class="pt-2" action="/add-to-cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{ $product->id }} />
                <button class="btn accent-background text-white">Add to cart</button>
            </form>
        </div>
    </div>
</div>
@endforeach
