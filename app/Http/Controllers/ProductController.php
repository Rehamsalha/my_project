<?php

namespace App\Http\Controllers;
use Illuminate\Http\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $products=new Products;
        $products->name=$request->product_name;
        $products->price=$request->product_price;
        $products->quantity=$request->product_qty;
        $products->save();
        return redirect()->back;
    }

}
