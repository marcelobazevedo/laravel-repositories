<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ['Product 1', 'Product 2', 'Product 3', 'Product 4'];

        return $products;
    }
    public function show($id)
    {
        return "Exibindo o produto de id: {$id}";
    }
}
