@extends('layounts.layount')

@section('content')
    <h3>listado de categorias</h3>

  <table class="table">
        <thead>
          <tr>
          
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        
          </tr>
        </thead>
        <tbody>
         @foreach ($categorias as $categoria)
         <tr>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td>
              <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-warning">Editar</a>
              <form action="{{route('categorias.destroy',$categoria->id)}}" method="POST" style="display:inline">
                  @csrf
                  @method('DELETE')
              <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </td>
       </tr>
         </tr>
             
         @endforeach
        </tbody>
      </table>

@endsection