@extends('layouts.site')
@section('title','tenits')
@section('content')

    <div id="Centrado" class="row">
        <div class= "col-8">
            <h1>Tenits</h1>
        </div>
   
        <div class="col-4">
            <a class="btn btn-sm btn-success" href="{{route('tenits.create')}}">Añadir</a>
        </div>
    </div>
    <h1>Lista de tenis</h1>
    
    <table class="table table-bordered">
        <thead>
        'nombre',
        'marca',
        'precio',
        'genero'
            <th>nombre</th>
            <th>marca</th>
            <th>precio</th>
            <th>genero</th>
           
        </thead>
        <tbody>
            @foreach ($tenits as $j)
                <tr>
                    <td>{{$j->nombre}}</td>
                    <td>{{$j->marca}}</td>
                    <td>{{$j->precio}}</td>
                    <td>{{$j->genero}}</td>
                    
                    <td>
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection