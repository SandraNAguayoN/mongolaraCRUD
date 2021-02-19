
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 align="center">Producto</h1></div>
                    <div class="card-body">

                    @if($data)

                    <form action="{{ route('post.update', $data->_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <p>Creado por <b>{{ $data->user->name }}</b></p>
                        <div class="form-group">
                            <label for="pdt">Nombre del producto:</label>
                                <input type="text" class="form-control" name="product" value="{{ $data->product }}" required>
                        </div>
                        <div class="form-group">
                            <label for="dpn">Descripción del producto:</label>
                                <textarea type="text" class="form-control" name="description" required>{{ $data->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="bnd">Precio:</label>
                                <input type="number" step="any" class="form-control" name="price" value="{{ $data->price }}" required>
                        </div>
                        <div class="form-group">
                            <label for="bnd">Marca:</label>
                                <input type="text" class="form-control" name="brand" value="{{ $data->brand }}" required>
                        </div>
                        <div class="form-group">
                            <label for="mdl">Modelo:</label>
                                <input type="text" class="form-control" name="model" value="{{ $data->model }}" required>
                        </div>
                        <div class="form-group">
                            <label for="clr">Color:</label>
                                <input type="text" class="form-control" name="color" value="{{ $data->color }}" required>
                        </div>
                        <div class="form-group">
                            <label for="fns">Agotado:</label>
                            <select name="soldout" class="form-control" value="{{ $data->soldout }}" required>
                                    <option value="true">Si</option>
                                    <option value="false" selected>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="avl">Disponible(s):</label>
                                <input type="number" class="form-control" name="available" value="{{ $data->available }}" required>
                        </div>
                        
                        <p align="center"><button class="btn btn-secondary">Guardar</button></p>
                    </form>

                    @else

                    <form action="{{ route('post.save') }}" method="POST">
                    @csrf
                    <div class="form-group">
                            <label for="pdt">Nombre del producto:</label>
                                <input type="text" class="form-control" name="product" required>
                        </div>
                        <div class="form-group">
                            <label for="dpn">Descripción del producto:</label>
                                <textarea type="text" class="form-control" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bnd">Precio: </label>
                                <input type="number" step="any" class="form-control" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="bnd">Marca:</label>
                                <input type="text" class="form-control" name="brand" required>
                        </div>
                        <div class="form-group">
                            <label for="mdl">Modelo:</label>
                                <input type="text" class="form-control" name="model" required>
                        </div>
                        <div class="form-group">
                            <label for="clr">Color:</label>
                                <input type="text" class="form-control" name="color" required>
                        </div>
                        <div class="form-group">
                            <label for="fns">Agotado:</label>
                            <select name="soldout" class="form-control" rows="5" required>
                                    <option value="true">Si</option>
                                    <option value="false" selected>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="avl">Disponible(s):</label>
                                <input type="number" class="form-control" name="available" required>
                        </div>


                        <p align="center"><button class="btn btn-secondary">Guardar</button></p>
                    </form>

                    @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
