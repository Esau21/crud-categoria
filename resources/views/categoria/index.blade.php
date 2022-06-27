@extends('layouts.template')

@section('content')


<div class="card p-5">
    <div class="card-header">
        <h6>Categorias</h6>
    </div>
    <div class="card-body">
        <div class="row sales layout-top-spacing">
            <div class="col-sm-12">
                <div class="widget widget-chart-one">
                    <div class="widget-content">
                        <div class="table-responsive">
                            <a class="btn btn-outline-primary" href="{{ route('categoria.crear') }}"><i class="fas fa-plus-circle" style="justify-content:end"></i> add categoria</a>
                            <table class="table table-bordered table striped mt-1">
                                <thead class="text-white" style="background: #3B3F5C">
                                    <tr>
                                        <th class="table-th text-white text-center">ID</th>
                                        <th class="table-th text-white text-center">NAME</th>
                                        <th class="table-th text-white text-center">DESCRIPCION</th>
                                        <th class="table-th text-white text-center">OPTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($data as $categori)
                                        <td class="text-center">
                                            {{$categori->id}}
                                        </td>
                                        <td>
                                            <h6>{{$categori->name}}</h6>
                                        </td>
                                        <td class="text-center">
                                            {{$categori->descripcion}}
                                        </td>
                                        <td class="text-center">
                                            
                                            <form method="GET" action="{{ url("categories/{$categori->id}/edit") }}">
                                                @method('put')
                                                @csrf
                                                <button type="submit" href="javascript:void(0)" class="btn btn-outline-primary btn-sm mtmobile" title="Edit"><i class="fas fa-edit"></i></button>
                                            </form>

                                            <form method="POST" action="{{ url("categories/{$categori->id}/eliminar") }}">
                                                @method('DELETE')
                                                @csrf
                                                <button href="javascript:void(0)" type="submit" class="btn btn-outline-danger btn-sm mtmobile"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        Edgar Dev
    </div>
</div>

@endsection
