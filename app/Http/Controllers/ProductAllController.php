<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductAllController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('created_at', 'ASC')->get();
        return view('all-product')->with('data', $data);
    }
}
