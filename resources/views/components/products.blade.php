
@foreach ($products as $product)
<div class="col-md-3 col-12 pb-3">
    <div class="new-card draw">
        <div class="new-card-content">
            <p class="new-card-title">{{ $product->name }}</p>
            <p class="new-card-text">{{ $product->description }}</p>
            <a href="#" class="new-button">Buy Now</a>
        </div>
    </div>
</div>
 @endforeach