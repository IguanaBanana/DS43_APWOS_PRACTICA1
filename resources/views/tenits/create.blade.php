@extends('layouts.site')
@section('title','Tenis - Crear')
@section('content')
    <h1>Agregar unos Tenis</h1>
    <div class="row">

        <div class="col-md-8">
            <img src="" class="img-fluid">
        </div>
        <div class="col-md-4">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            
        @endforeach
        <form method="POST" action="{{route('tenits.store')}}">
        @csrf
        <label>Nombre</label>
                <input type="text" name="nombre" class="form-control"></input>
                @if($errors->has('nombre'))
                    <p class="text-warning">{{$errors->first('nombre') }}</p>
                @endif
              
                <label>Marca</label>
                <select name="marca" class="form-control">
                    <option  >Seleccione la Marca</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Puma">Puma</option>
                    <option value="Supra">Supra</option>
                    <option value="Otros">Otros</option>
                </select>
                @if($errors->has('marca'))
                    <p class="text-warning">{{$errors->first('marca') }}</p>
                @endif

                <label>precio</label>
                <input type="text" name="precio" class="form-control"></input>
                @if($errors->has('precio'))
                    <p class="text-warning">{{$errors->first('precio') }}</p>
                @endif

                <label>genero</label>
                <select name="genero" class="form-control">
                    <option  >Seleccione el genero </option>
                    <option value="Mujer">Mujer</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Unisex">Unisex</option>
                </select>
                @if($errors->has('genero'))
                    <p class="text-warning">{{$errors->first('genero') }}</p>
                @endif
    
                <button  class="btn btn-lg btn-success" type="submit">Guardar</button>
        </form>
        </div>
    </div>
@endsection