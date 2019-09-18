<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div style="margin: 50px;">
		@if(\Session::has('success'))
		<div class="alert alert-success">
			<p>
				{{\Session::get('success')}}
			</p>
		</div>
		@elseif(\Session::has('updateActOk'))
			<div class="alert alert-success">
				<p>
					{{\Session::get('updateActOk')}}
				</p>
			</div>
		@endif
		<form method="post" action="{{url('blogs')}}" enctype="multipart/form-data">
			<a style="float: right;" href="{{ url('/logout') }}" class="btn btn-danger">Logout</a>
			<h3>
				Agregar Artículo
			</h3>
			{{csrf_field()}}
			<table style="border-collapse: separate; border-spacing: 15px;">
				<tr>
					<td class="form-group">
						<input type="text" name="titulo" class="form-control" placeholder="Ingrese Título"/>
					</td>
				</tr>
				<tr>
					<td class="form-group">
						<textarea style="height: 150px;" type="text" name="descripcion" class="form-control" placeholder="Ingrese Descripción"></textarea>
					</td>
				</tr>
				<tr>
					<td class="form-group">
						<p>
							Seleccione una imágen para su articulo
						</p>
						<input type="file" name="img" class="form-control-file">
						<p>
							Debe tener medidas proporcionales a 200px X 130px
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="btn btn-primary">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div style="margin: 50px;">
			<h3>
				Eventos
			</h3>
			<h5>
				Los eventos son ordenados segun proximidad
			</h5>
			<table class="table table-striped" style="width: 800px;">
				<thead>
					<tr>
						<th>Evento</th>
						<th>Título</th>
						<th>Fecha</th>
						<th>Imágen</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					<form method="post" action="{{url ('actividadesUpdate', '1')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<input name="_method" type="hidden" value="PATCH">
						<tr>
							<td>
								1
							</td>
							<td>
								<input type="text" name="titulo" class="form-control" value="{{$actividades[0]['titulo']}}">
							</td>
							<td>
								<input type="text" name="fecha" class="form-control" value="{{$actividades[0]['fecha']}}">
							</td>
							<td>
								<input type="file" name="img" class="form-control-file">
							</td>
							<td>
								<input type="submit" value="Editar" class="btn btn-primary">
							</td>
						</tr>
					</form>
					<form method="post" action="{{url('actividadesUpdate', '2')}}">
						{{csrf_field()}}
						<input name="_method" type="hidden" value="PATCH">
						<tr>
							<td>
								2
							</td>
							<td>
								<input type="text" name="tituloAct2" class="form-control" value="{{$actividades[1]['titulo']}}">
							</td>
							<td>
								<input type="text" name="fechaAct2" class="form-control" value="{{$actividades[1]['fecha']}}">
							</td>
							<td></td>
							<td>
								<input type="submit" value="Editar" class="btn btn-primary">
							</td>
						</tr>
					</form>
					<form method="post" action="{{url('actividadesUpdate', '3')}}">
						{{csrf_field()}}
						<input name="_method" type="hidden" value="PATCH">
						<tr>
							<td>
								3
							</td>
							<td>
								<input type="text" name="tituloAct3" class="form-control" value="{{$actividades[2]['titulo']}}">
							</td>
							<td>
								<input type="text" name="fechaAct3" class="form-control" value="{{$actividades[2]['fecha']}}">
							</td>
							<td></td>
							<td>
								<input type="submit" value="Editar" class="btn btn-primary">
							</td>
						</tr>
					</form>
					<form method="post" action="{{url('actividadesUpdate', '4')}}">
						{{csrf_field()}}
						<input name="_method" type="hidden" value="PATCH">
						<tr>
							<td>
								4
							</td>
							<td>
								<input type="text" name="tituloAct4" class="form-control" value="{{$actividades[3]['titulo']}}">
							</td>
							<td>
								<input type="text" name="fechaAct4" class="form-control" value="{{$actividades[3]['fecha']}}">
							</td>
							<td></td>
							<td>
								<input type="submit" value="Editar" class="btn btn-primary">
							</td>
						</tr>
					</form>
					<form method="post" action="{{url('actividadesUpdate', '5')}}">
						{{csrf_field()}}
						<input name="_method" type="hidden" value="PATCH">
						<tr>
							<td>
								5
							</td>
							<td>
								<input type="text" name="tituloAct5" class="form-control" value="{{$actividades[4]['titulo']}}">
							</td>
							<td>
								<input type="text" name="fechaAct5" class="form-control" value="{{$actividades[4]['fecha']}}">
							</td>
							<td></td>
							<td>
								<input type="submit" value="Editar" class="btn btn-primary">
							</td>
						</tr>
					</form>
				</tbody>
			</table>
		</form>
	</div>
	</body>
	</html>