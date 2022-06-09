@extends('layouts.app')
@section('content')
    <h1>Gestión de inventario</h1>
    <hr/>

    <div class="container-fluid px-5">
        <form action="{{ route('inventario.update', ['inventario'=>$articulo]) }}" method="post">
            @method('PUT')
            @csrf
            <legend>Nuevo Artítulo</legend>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="foto">Nombre de la foto</label>
                    <input type="text" name="foto" id="foto" class="form-control" value="{{ old('foto') ? : $articulo->foto }}"/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') ? : $articulo->nombre }}"/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="artista">Artista</label>
                    <input type="text" name="artista" id="artista" class="form-control" value="{{ old('artista') ? : $articulo->artista }}"/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" min="0" step="1" id="stock" class="form-control" value="{{ old('stock') ? : $articulo->stock }}"/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" value="{{ old('categoria') ? : $articulo->categoria }}"/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control" min="0.01" step="0.01" value="{{ old('precio') ? : $articulo->precio }}"/>
                </div>
            </div>
            <div class="row mt-4"> <div class="input-field col-sm-6 text-lg-end">
                <input type="submit" class="btn btn-primary" value="Editar" /></div>
                <div class="input-field col-sm-6 text-lg-start">
                    <input type="reset" class="btn btn-danger" value="Borrar" />
                </div>
            </div>
        </form>
    </div>
@endsection














