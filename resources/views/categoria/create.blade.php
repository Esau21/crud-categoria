@extends('layouts.template')
@section('content')

<div class="card p-5">
    <div class="card-header">
        <h5 style="color: #3b3f5c">Crea una nueva nueva categoria</h5>
    </div>
    <div class="card-body">
        <form action="{{ url('categories/registrar') }}" method="POST">
            @csrf
            <div class="form-group col-md-6 row">
            <input class="form-control" type="text" name="name" id="name" placeholder="ingresa el nombre de la categoria" required>
        </div>
        <div class="form-group col-md-6 row">
            <input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="agrega una descripcion" required>
        </div>
        <div class="row">
            <button class="btn btn-outline-success btn-sm" type="submit">crear categoria</button>
        </div>
        </form>
    </div>
    <div class="card-footer">
        Edgar Dev
    </div>
</div>

@endsection