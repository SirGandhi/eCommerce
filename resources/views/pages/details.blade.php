<x-master>
    <div class="container vh-100 py-5">
        <div class="row py-5">
            <div class="col-md-6 col-12">
                <img class="img-fluid" src="{{$product->gallery}}" />
            </div>
            <div class="col-md-6 col-12">
                <div class="py-5">
                    <h2>{{ $product->name }}</h2>
                    <h5>Category: {{ $product->category }}</h5>
                    <p>{{ $product->description }}</p>
                    <form action="/add-to-cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value={{ $product->id }} />
                        <button>Add to cart</button>
                    </form>
                    
                    <button>Buy now</button>
                </div>           
            </div>
        </div>
    </div>
</x-master>