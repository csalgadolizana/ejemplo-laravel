<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel CRUD</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<style>
		body {
			width: 450px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<h1>Indexxxx</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">Ejemplo</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="/users">Todos</a></li>
        			<li><a href="/catalogo/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Lista de productos</h4>
  		</div>

  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre producto</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($catalogos as $cat)
						<tr>
							<td>{{ $cat->id }}</td>
							<td>{{ $cat->nombreproducto }}</td>
							<td>$ {{ $cat->precio }}</td>
							<td>
								<a href="/catalogo/show/{{ $cat->id }}"><span class="label label-info">Ver</span></a>
								<a href="/catalogo/showupdate/{{ $cat->id }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('/catalogo/destroy',$cat->id) }}"><span class="label label-danger">Eliminar</span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>

  	@if(Session::has('message'))
	    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif
</body>
</html>