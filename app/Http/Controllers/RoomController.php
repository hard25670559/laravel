<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Http\Requests;

class RoomController extends Controller {

    public function index() {
		return view('Room.index', array(
			'user' => array('name' => 'alan', 'age' => '10'))
		);
	}
}
