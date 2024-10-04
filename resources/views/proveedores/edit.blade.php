@extends('layounts.layount')

@section('content')
    <h3>formulario de proveedor</h3>

    @if (session('status')){
        <div>
            {{session('status')}}
        </div>
    }
        
    @endif

  
    <form action="{{route('proveedores.update', $proveedor->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre de la proveedor </label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$proveedor->nombre)}}">
          @error('nombre')
          <span class="text-danger">{{$message}}</span>
              
          @enderror
        </div>
        <div class="mb-3">
          <label for="contacto" class="form-label">contacto</label>
          <input type="text" class="form-control" id="contacto" name="contacto" value="{{old('contacto',$proveedor->contacto)}}">
          @error('contacto')
          <span class="text-danger">{{$message}}</span>  
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
@endsection