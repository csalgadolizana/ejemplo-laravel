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
	<h1>Edddiiiiiiitt</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">ejemplo</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="/catalogo">Todos</a></li>
        			<li><a href="/catalogo/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Editar usuario</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($catalogo))
    			<form method="post" action="/catalogo/update/{{ $catalogo->id }}">
					{{ csrf_field() }}
          <p>
            <input value="{{ $catalogo->nombreproducto }}" type="text" name="nombreproducto" placeholder="Nombre" class="form-control" required>
          </p>
          <p>
            <input value="{{ $catalogo->precio }}" type="number" name="precio" placeholder="Twitter" class="form-control" required>
          </p>
          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información para éste registro.
          </p>
          @endif
        <a href="/catalogo" class="btn btn-default">Regresar</a>
      </form>
		</div>
	</div>

  @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</body>
</html>