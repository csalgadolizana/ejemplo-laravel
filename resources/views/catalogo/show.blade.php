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
	<h1>Shooooowww</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">Ejemplo</a>
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
  			<h4>Información del producto</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($catalogo))
		    <p>
  				ID: <strong>{{ $catalogo->id }}</strong>
  			</p>
  			<p>
  				Nombre: <strong>{{ $catalogo->nombreproducto }}</strong>
  			</p>
  			<p>
  				Precio: <strong>{{ $catalogo->precio }}</strong>
  			</p>
        @else
        <p>
          No existe información para éste usuario.
        </p>
        @endif
        <a href="/catalogo" class="btn btn-default">Regresar</a>
		</div>
	</div>
</body>
</html>