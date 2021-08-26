<?php 
use App\Http\Controllers\ProductController;
if(Session::has('user')){
    $total = ProductController::cartItem();
    $totalOrder = ProductController::order();
}else{
    $total = 0;
    $totalOrder = 0;
}
?>
<x-master>
    <section>
        <div class="container py-5 min-vh-100">
            <div class="row g-5 py-5">
                <div class="col-md-7">
                    <h4 class="d-flex justify-content-between align-items-center mb-3"> Your Items</h4>
                    <table class="table">
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Your cart</span>
                    <span class="badge rounded-pill accent-background">{{ $total }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                    @foreach ($products as $product)
                    <li class="list-group-item d-flex justify-content-between lh-sm align-items-center">
                        <div class="w-75">
                            <h6 class="my-0">{{ $product->name }}</h6>
                            <small class="text-muted">{{ $product->small_desc }}</small>
                        </div>
                        <span class="text-muted">£ {{ $product->price }}</span>
                        <a href="/remove-from-cart/{{$product->cartId}}" class="new-button" style="padding: 0.25em 0.5em;">X </a>
                    </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (GBP)</span>
                        <strong>£ {{ $totalOrder }}</strong>      
                    </li>
                    </ul>

                    <form class="card p-2">
                    <div class="input-group">
                        <a href="/order" class="btn accent-background w-100 text-white">Checkout</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-master>