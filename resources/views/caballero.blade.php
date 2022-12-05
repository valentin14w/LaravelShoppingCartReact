@extends('layout')
   
@section('content')

<h1>Lista de Productos de Caballero</h1>
<div class="row">
    @foreach($products as $product)
    @if($product->category == 'Caballero')
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <center>
                    <img src="{{ $product->image }}" alt="" width="200" height="200">
                </center>
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>Categoria: </strong> {{ $product->category }}</p>
                    <p><strong>Precio: $</strong> {{ $product->price }}</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Agregar al carrito</a> </p>
                </div>
            </div>
        </div>
    
    @endif
    @endforeach
</div>
    
@endsection