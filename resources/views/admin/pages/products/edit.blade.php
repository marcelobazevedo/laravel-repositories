@extends('admin.layouts.app')

@section('title', 'editando produto produto')



@section('content')

<h1>Editar o produto {{$id}}</h1>

<form action="{{route('products.update', $id)}}" method="POST">
    @method('PUT')
    @csrf
<input type="text" name="name" placeholder="Nome">
<input type="text" name="description" placeholder="descrição">
<button type="submit">Enviar</button>
</form>

@endsection
