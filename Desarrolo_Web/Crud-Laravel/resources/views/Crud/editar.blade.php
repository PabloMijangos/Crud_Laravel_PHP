<!doctype html>
<html lang="en">
  <head>
    <title>Editar Empleado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

  <br>
	  	<h1 class="text-center" style="margin-left: 80px; margin-right: 80px; padding: 15px; background-color: #001940; color:white;"> Formulario Editar Empleado </h1>

	  <div class="container"> <!--{{ url('/empleado/store') }}-->
		  <form action="{{ url('/empleado/'.$empleado -> id) }}" method="POST" enctype="multipart/form-data">
			@csrf
            {{ method_field('PATCH') }}
			
			  <div class="col">
				  
			  	<div class="mb-3">
					<label for="lbl_codigo" class="form-label"><b>Codigo</b></label>
					<input type="text" name="codigo" id="codigo" class="form-control" placeholder="E001" value="{{ $empleado -> codigo }}" required>
				</div>

				<div class="mb-3">
					<label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
					<input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombre1 Nombre2" value="{{ $empleado -> nombres }}" required>
				</div>

				<div class="mb-3">
					<label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
					<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellido1 Apellido2" value="{{ $empleado -> apellidos }}" required>
				</div>

				<div class="mb-3">
					<label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
					<input type="text" name="direccion" id="direccion" class="form-control" placeholder="Calle/Avenida/Lugar #Casa"value="{{ $empleado -> direccion }}" required>
				</div>

				<div class="mb-3">
					<label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
					<input type="number" name="telefono" id="telefono" class="form-control" placeholder="12345678" value="{{ $empleado -> telefono }}" required>
				</div>

				<div class="mb-3">
				  <label for="lbl_puesto" class="form-label"><b>Puesto</b></label>
				  <select class="form-select" name="id_puesto" id="id_puesto" value="{{ $empleado -> id_puesto }}" required>
					<option value=0>--- Puestos ---</option>
					@foreach($puestos as $puesto)
						<option value="{{ $puesto['id_puesto'] }}">{{ $puesto['puesto'] }}</option>
					@endforeach
				  </select>
				</div>

				<div class="mb-3">
					<label for="lbl_fn" class="form-label"><b>Fecha de Nacimiento</b></label>
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $empleado -> fecha_nacimiento }}" placeholder="dd/mm/aaaa" required>
				</div>
				

				<div class="mb-3">
                    <!--name="btn_agregar" id="btn_agregar"-->
					<td><a href="{{ url('/empleado/index') }}" class='btn btn-warning'>Regresar</a></td>
					<input type="submit" class="btn btn-success" value="Guardar cambios">
				</div>


			  </div>
		  </form>
		
		  <br>

	  </div>







    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>