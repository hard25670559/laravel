<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller {

    public function login() {
        return view('wellcome');
    }

    public function check(Request $request) {

        $user = User::where('account', '=', $request->input('acc'), 'and')->where('password', '=', $request->input('pass'))->get();

        $isRegister = $user->count() > 0 ? true : false;

        return response()->json($isRegister);
    }

    public function register(Request $request) {
        $user = new User();
        $success;
        $count = User::where('account', '=', $request->input('acc'))->count();

        if ($count == 0) {
            $user->name = $request->input('name');
            $user->account = $request->input('acc');
            $user->password = $request->input('pass');
            $user->mail = $request->input('email');
            $user->sex = $request->input('sex');
            $user->status = 0;
            $user->purview = 0;
            $success = $user->save();
        } else {
            $success = false;
        }

        return response()->json($success);
    }
}