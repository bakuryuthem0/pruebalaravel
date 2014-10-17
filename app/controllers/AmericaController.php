<?php
class AmericaController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Inicio Controller
	|--------------------------------------------------------------------------
	*/
	function venezuela()
	{
		$estados = Informacion::where('Pais_uni','=','Venezuela');
		return View::make('estados')->with('estados_uni',$estados);
	}
	/*public function america()
	{
		$title = 'America';
		return View::make('continentes.america.index');
	}

		public function argentina()
		{
			$title = 'Argentina';
			return View::make('continentes.america.argentina');
		}
		public function mexico()
		{
			$title = 'Mexico';
			return View::make('continentes.america.mexico');
		}
		public function usa()
		{
			$title = 'Usa';
			return View::make('continentes.america.usa');
		}
		public function venezuela()
		{
			$title = 'Venezuela';
			return View::make('continentes.america.venezuela');
		}*/
}

