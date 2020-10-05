<!DOCTYPE html>
<html>
<head>
	<title>Hola</title>
</head>
<body>
	<div class="container">
		<table class="table">
  <thead>
    <tr>
      <th >Id</th>
      <th >Dirección</th>
      <th >RFC</th>
      <th >Fecha registro</th>
      <th >$ Magna</th>
      <th >Colonia</th>
      <th >Premiso #</th>
      <th >Fecha Aplicación</th>
      <th >Permiso Id</th>
      <th >Longitud</th>
      <th >Latitud</th>
      <th >Premium</th>
      <th >Razón Social</th>
      <th >CP</th>
      <th >Diesel</th>
    </tr>
  </thead>
  <tbody>
  	<th>{{$gas['pagination']['total']}}</th>
  	@foreach($gas as $g)
  	@foreach($g as $r)
    <tr>
    	
      <th>{{$r['_id']}}</th>
      <th >{{$r['calle']}}</th>
      <th >{{$r['rfc']}}</th>
      <th >{{$r['date_insert']}}</th>
      <th >{{$r['regular']}}</th>
      <th >{{$r['colonia']}}</th>
      <th >{{$r['numeropermiso']}}</th>
      <th >{{$r['fechaaplicacion']}}</th>
      <th ></th>
      <th >{{$r['longitude']}}</th>
      <th >{{$r['latitude']}}</th>
      <th >{{$r['premium']}}</th>
      <th >{{$r['razonsocial']}}</th>
      <th >{{$r['codigopostal']}}</th>
      <th >{{$r['dieasel']}}</th> 
    </tr>
    @endforeach 
    @endforeach
    
    
  </tbody>
</table>
	</div>

</body>
</html>