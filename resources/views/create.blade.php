@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Agregar Producto
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('product.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nombre</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Descripcion</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="category">Categoria</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          <div class="form-group">
              <label for="image">Imagen</label>
              <input type="text" class="form-control" name="image"/>
          </div>
          <div class="form-group">
              <label for="price">Precio</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Crear Producto</button>
      </form>
  </div>
</div>
@endsection