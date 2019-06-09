<?php

namespace App\Http\Controllers;
use App\Models\Stand;


class EventsController extends Controller {

	public function event($id){
		// Se realiza el llamado del los eventos que se encuentran en la base de datos
		$event = Stand::select('type AS name', 'description AS desc', 'starEvent AS start', 'endEvent AS end')->where('id', $id)->first();
		
		return view('events.event', ['data' => $event]);
	}

}