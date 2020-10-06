<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\codigos;

/**
 * 
 */
class HomeController extends Controller
{
	
	public function Index()
	{
		$respuesta = Http::get('https://api.datos.gob.mx/v1/precio.gasolina.publico');

		$gas = $respuesta->json();

		return view('Home',compact('gas'));
	}

	public function consulta()
 	 {    
 	 	$respuesta = Http::get('https://api.datos.gob.mx/v1/precio.gasolina.publico');

		$gas = $respuesta->json();
       $cp=codigos::orderBy('IdCP')->paginate('20');
 
   
    return view ('ListaCP',compact('gas'))->with(['cp' => $cp]);
	}
}