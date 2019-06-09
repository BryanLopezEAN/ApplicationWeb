<?php

namespace App\Http\Controllers;
use App\Models\Stand;

class IndexController extends Controller{

	public function listEvents(){

		/* Se hace el llamado a la base de datos */
		$events = Stand::select('id AS key', 'type AS name', 'description')->get();

		return view('home.index', ['events' => $events]);
	}

}