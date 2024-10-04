@extends('layounts.layount')

@section('content')

@if (session('status')){
  <div>
      {{session('status')}}
  </div>
}
  
@endif
    <h3>listado de Productos</h3>

  <table class="table">
        <thead>
          <tr>
          
            <th scope="col">Productos</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Acciones</th>
        
          </tr>
        </thead>
        <tbody>
         @foreach ($productos as $producto)
         <tr>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->categoria->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
            
            <td>
                <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-warning">Editar</a>
                <form action="{{route('productos.destroy',$producto->id)}}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </td>
         </tr>
         @endforeach
        </tbody>
      </table>

@endsection