<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class InfoController extends Controller
{
    public function getInfo(Request $request) {
		$name = $request->input('name');
		$sex = $request->input('sex');


		$member = new Member();


//		$member->name = $name;
//		$member->save();

//		$data = DB::select('select id from members where id = ?', [$name]);

		$all = Member::all();

		foreach ($all as $item) {
			foreach ($item as $value) {
				echo $value;
			}
		}

		return ;

//		return view('get', ['test' => $data]);
	}
}