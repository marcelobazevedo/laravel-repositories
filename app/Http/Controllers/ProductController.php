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
    public function create()
    {
        return "formulario de produtos";
    }

    public function edit($id)
    {
        return "form para editar o produto de id: {$id}";
    }
    public function store()
    {
        return "cadastrando";
    }

    public function update($id)
    {
        return "Editando o produto de id: {$id}";
    }
    public function destroy($id)
    {
        return "Apagando o produto de id: {$id}";
    }
}
