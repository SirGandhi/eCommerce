<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function product(){
        $data = Product::all();
        return view('.pages.product', ['products' => $data]);
    }
    
    function detailsPage($id){
        $data = Product::find($id);
        return view('pages.details', ['product'=>$data]);
    }

    function search(Request $req){
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('pages.search', ['products'=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/cart');
        }else{
            return redirect('/login');
        }
        
    }

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cart(){
        if(Session::has('user')){
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cartId')
            ->get();
            return view('pages.cart', ['products'=>$products]);
        }else{
            return redirect('/login');
        }
        
    }

    function removeFromCart($id){
        Cart::destroy($id);
        return redirect('/cart');
    }

    static function order(){
        $userId = Session::get('user')['id'];
        $totalOrder = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');
        return $totalOrder;
    }
}
