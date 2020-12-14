<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function productvalves() {
        return view('product.productvalves');
    }

    public function servovalves() {
        return view('product.servovalves');
    }
}
