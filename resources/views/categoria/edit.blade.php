@extends('layouts.template')
@section('content')

<div class="card p-5">
    <div class="card-header">
        <h5 style="color: #3b3f5c">Actualizar la categoria</h5>
    </div>
    <div class="card-body">
        <form action="{{ url("categories/{$data->id}") }}" method="POST">
            {{ method_field('PUT') }}
            @csrf
            <div class="form-group col-md-6 row">
            <input class="form-control" type="text" name="name" placeholder="ingresa la nueva categoria"  required>
        </div>
        <div class="form-group col-md-6 row">
            <input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="ingresa la nueva descripcion" required>
        </div>
        <div class="row">
            <button class="btn btn-outline-success btn-sm" type="submit">Actualizar categoria</button>
        </div>
        </form>
    </div>
    <div class="card-footer">
        Edgar Dev
    </div>
</div>

@endsection