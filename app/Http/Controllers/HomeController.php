<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

/**
 * 
 */
class HomeController extends Controller
{
	
	public function Index()
	{
		$respuesta = Http::get('https://api.datos.gob.mx/v1/precio.gasolina.publico');

		$gas = $respuesta->json();
		//$gas = $gas['results'][]['calle'];
		
		//dd($gas);

		return view('Home',compact('gas'));



	}
}