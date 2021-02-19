@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <!--<div class="row justify-content-center">-->
    <div class="row justify-content">
        <div class="col-md-8">
            <div class="card"  style="width:1100px;">
                <!--<div class="card-header">{{ __('Dashboard') }}</div>-->
                <div class="card-header"><h1>Productos</h1>
                <div style="float:right; width:100px;">
                    <a style="background:#47BE42; border-radius: 6px; color:white;" class="nav-link" href="{{ route('post.form') }}"><b>&nbsp;&nbsp;&nbsp;Crear&nbsp;&nbsp;&nbsp;</b></a>
                </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Agotado</th>
                                <th>Disponible(s)</th>
                                <th>Vendedor</th>
                                <th>Actualizado</th>
                                <th style="width:150px;">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $post->product }}</td>
                                <td>${{ $post->price }}</td>
                                <td>{{ $post->brand }}</td>
                                <td>{{ $post->model }}</td>
                                <td>{{ $post->color }}</td>
                                <td>{{ $post->soldout }}</td>
                                <td>{{ $post->available }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>
                                    <a href="{{ route('post.form', $post->_id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="{{ route('post.delete', $post->_id) }}" 
                                    onclick="return confirm('¿Estás seguro de que deseas eliminarlo?')" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
