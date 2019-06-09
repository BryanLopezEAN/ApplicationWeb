<?php

namespace App\Http\Controllers;
use App\Models\StandDesc;

class ScenariosController extends Controller {

	public function scenarios() {
		//Llamado de la funcion select del modelo correspondiente a la tabla de donde obtenemos la información solicitada
		$scenarios = StandDesc::select('stand_key', 'name', 'img1 AS img')->get();

		return view('scenarios.list', ['data' => $scenarios]);
	}

	public function type($type){
		//Llamado al modelo correspondiente a la tabla que se va a obtener la información.
		$scenario = StandDesc::where('stand_key', $type)->first();

		return view('scenarios.details', ['data' => $scenario]);
	}


	public function reservation($type){
		//Llamado al modelo correspondiente a la tabla que se va a obtener la información.
		$scenario = StandDesc::where('stand_key', $type)->first();

		return view('reservation.form', ['data' => $scenario]);
	}
}