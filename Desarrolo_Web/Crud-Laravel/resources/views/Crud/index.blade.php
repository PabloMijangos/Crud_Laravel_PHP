<!doctype html>
<html lang="en">
  <head>
    <title>Empleados</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <br>
	<h1 class="text-center" style="margin-left: 80px; margin-right: 80px; padding: 15px; background-color: #001940; color:white;"> Lista de Empleados </h1>
    
  <div class="container">
  
  <div class="mb-3">
		<a href="{{ url('/empleado/create') }}" class="btn btn-primary"> Agregar Nuevo </a>
	</div>

    <table class="table table-striped table-inverse table-responsive">
	    <thead class="thead-inverse">
		    <tr>
			  <th>Codigo</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Nacimiento</th>
				<th>Puesto</th>
			</tr>
		</thead>
		<tbody>
      
      @foreach($empleados as $empleado)
      <tr data-id="{{ $empleado -> id }}">

        <td>{{ $empleado -> codigo}}</td>
        <td>{{ $empleado -> nombres}}</td>
        <td>{{ $empleado -> apellidos}}</td>
        <td>{{ $empleado -> direccion}}</td>
        <td>{{ $empleado -> telefono}}</td>
        <td>{{ $empleado -> fecha_nacimiento}}</td>
        <td>{{ $empleado -> id_puesto}}</td>
        
        <td>
          <a href="{{ url('/empleado/'. $empleado -> id .'/edit') }}" class="btn btn-warning">Editar</a>
        </td>

        <td>
          <form action="{{ url('/empleado/'.$empleado -> id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" onclick="return confirm('¿Seguro que deseas eliminar el registro?')"  class="btn btn-danger" value="Eliminar">
          </form>
        </td>
      </tr>
      @endforeach
      
    </tbody>
	</table>
  {{ $empleados->links() }}
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>