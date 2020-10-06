<!DOCTYPE html>
<html>
   <head>
      <title>Listado de Codigos Postales</title>
   </head>
   <body>
      <style>
         #map-canvas{
         width: 100%;
         height: 400px;
         }
      </style>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGcb2j1-ssKOAlnhmPDA_IAmN-OsAp-Tg&libraries=places"
         type="text/javascript"> </script> 
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <div class="container">
         <div class="row">
            <div class="box-body" style="overflow: auto;">    
               <div class="row">
                  <div class="content">
                    <h1 style="content: center" class="text-center"> Listado de Gasolineras</h1>
                     <table class="table table-bordered table-striped" border=".5" style="width: auto; height: auto;">
                        <thead>
                           <tr>
                              <th >Dirección</th>
                              <th >$ Magna</th>
                              <th >$ Premium</th>
                              <th >Longitud</th>
                              <th >Latitud</th>
                              <th >Razón Social</th>
                              <th >CP</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($gas as $g)
                           @foreach($g as $r)
                           <tr>
                              <th >{{$r['calle']}}</th>
                              <th >$ {{$r['regular']}}</th>
                              <th >$ {{$r['premium']}}</th>
                              <th >{{$r['longitude']}}</th>
                              <th >{{$r['latitude']}}</th>
                              <th >{{$r['razonsocial']}}</th>
                              <th >{{$r['codigopostal']}}</th>
                           </tr>
                           @endforeach 
                           @endforeach    
                        </tbody>
                     </table>
                     <h1 style="content: center " class="text-center"> Listado de Estados y Codigos Postales</h1>
                     <table id="CP" class="table table-bordered table-striped" border=".5" style="width: auto; height: auto;" >
                        <thead>
                           <tr>
                              <th class="text-center"  >Codigo Postal</th>
                              <th class="text-center" >Estado</th>
                              <th class="text-center" >Municipio</th>
                              <th class="text-center" >Localidad</th>
                              <th class="text-center" >Tipo de Localidad</th>
                        </thead>
                        <tbody>
                           @foreach($cp as $codigo)
                           <tr>
                              <td>{{$codigo->d_CP}}</td>
                              <td>{{$codigo->d_estado}}</td>
                              <td>{{$codigo->D_mnpio}}</td>
                              <td>{{$codigo->d_asenta}}</td>
                              <td>{{$codigo->d_tipo_asenta}}</td>
                           </tr>
                           @endforeach
                     </table>
                     {{$cp->render()}}
                  </div>
               </div>
               <script type="text/javascript" src="{{asset('js/locationpicker.jquery.js')}}"></script>
               <!-- Inicio Mapa -->
               <h1 style="content: center " class="text-center"> Geolocalización</h1>
               <label for="inputdir" class="col-sm-3 control-label">Escribe tu dirección</label>
               <div class="form-group col-sm-7">
                  <input type="text" class="form-control" id="location" name="Direccion"  placeholder="Escriba su dirección" >
               </div>
               <div class="form-group">
                
                  <div id="map-canvas">Mapa</div>
               </div>
               <label for="inputlat" class="col-sm-2 control-label">Latitud:</label>
               <div class="form-group col-sm-3">
                  <input type="text" class="form-control" name="lat" id="lat"readonly="readonly">
               </div>
               <label for="inputlng" class="col-sm-2 control-label">Longitud:</label>
               <div class="form-group col-sm-3">
                  <input type="text" class="form-control" name="lng" id="lng"  readonly="readonly">
               </div>
               <script>
                  $('#map-canvas').locationpicker({
                        location: {
                            latitude: 19.340523,
                            longitude:-99.47743300000002
                        },
                        radius: 0,
                        inputBinding: {
                            latitudeInput: $('#lat'),
                            longitudeInput: $('#lng'),
                            locationNameInput: $('#location')
                        },
                        // Para cargar vista satelital
                        mapTypeId: google.maps.MapTypeId.SATELLITE,
                        enableAutocomplete: true,
                        onchanged: function (currentLocation, radius, isMarkerDropped) {
                            // Uncomment line below to show alert on each Location Changed event
                            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                        }
                    });
               </script>
               <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            </div>
         </div>
      </div>
   </body>
</html>