@extends('layounts.layount')

@section('content')
    <h3>listado de Proveedores</h3>

  <table class="table">
        <thead>
          <tr>
          
            <th scope="col">Nombre </th>
            <th scope="col">contacto</th>
            <th scope="col">Acciones</th>
        
          </tr>
        </thead>
        <tbody>
         @foreach ($proveedores as $proveedor)
         <tr>
            <td>{{$proveedor->nombre}}</td>
            <td>{{$proveedor->contacto}}</td>
            <td>
                
                  <a href="{{route('proveedores.edit', $proveedor->id)}}" class="btn btn-warning">Editar</a>
                  <form action="{{route('proveedores.destroy',$proveedor->id)}}" method="POST" style="display:inline">
                      @csrf
                      @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form>
                </td>
              
            </td>
         </tr>
             
         @endforeach
        </tbody>
      </table>

      <div>
        {{$proveedores->links('pagination::bootstrap-4') }}
      </div>

@endsection