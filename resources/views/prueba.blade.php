<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<li><a href="{{ url('lenguaje', ['en']) }}">Ingles</a></li>
<li><a href="{{ url('lenguaje', ['es']) }}">Español</a></li>
	{{trans('prueba.hello')}}
</body>
</html>