<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getDiscountForm()
    {
        return view('product_discount');
    }

    public function calculateDiscount(Request $request)
    {
        $discountPercent = $request->discount_percent;
        $price = $request->price;
        $productDescription = $request->description;
        $discountAmount = $price * $discountPercent * 0.01;
        $discountPrice = $price - $discountAmount;
        return view('show_discount_amount', compact(['productDescription', 'price', 'discountPercent', 'discountAmount', 'discountPrice']));
    }
}
