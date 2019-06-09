<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stand;

class ReservationController extends Controller {


	public function reserved(Request $request){
		// Obtenemos los valores de fecha, para verificar en la base de datos
		$formValues = ['type' => $request->input('event-type'), 'phone' => $request->input('phone'), 'starEvent' => $request->input('date-start'), 'endEvent' => $request->input('date-end'), 'description' => $request->input('description'), 'scenarioType' => $request->input('type')];

		// Se busca en la base de datos la infromación correspondiente al tipo de escenario escogido
		$scenario = Stand::where('scenarioType', $request->input('type'))->get();
		
		if(count($scenario) > 0){	//Si se cuenta con registros del tipo de escenario
			foreach ($scenario as $key => $value) {
				$value['starEvent'] = str_replace(" 00:00:00", "", $value['starEvent']);
				$value['endEvent'] = str_replace(" 00:00:00", "", $value['endEvent']);
				if($formValues['starEvent'] >= $value['starEvent'] && $formValues['endEvent'] <= $value['endEvent']){//Validamos que el escenario no se encuentra ya reservado
					return "ocupped";
				}
			}
			// Cuando no esta reservado el escenario, ejecutamos la función que guardara la información en la DB
			$this->save($formValues);
		}else{
			$this->save($formValues);
		}
	
		return "reserved";
	}

	private function save($data){
		$reservation = new Stand;

		$reservation->type = $data['type'];
		$reservation->phone = $data['phone'];
		$reservation->starEvent = $data['starEvent'];
		$reservation->endEvent = $data['endEvent'];
		$reservation->description = $data['description'];
		$reservation->scenarioType = $data['scenarioType'];
		$reservation->save();
	}

}