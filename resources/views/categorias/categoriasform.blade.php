@extends('layounts.layount')

@section('content')
    <h3>formulario de categorias</h3>

    @if (session('status')){
        <div>
            {{session('status')}}
        </div>
    }
        
    @endif

  
    <form action="{{route('categorias.store')}}" method="POST">
        @csrf
       
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre de la categoria</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
          @error('nombre')
          <span class="text-danger">{{$message}}</span>
              
          @enderror
        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
          @error('descripcion')
          <span class="text-danger">{{$message}}</span>  
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
@endsection