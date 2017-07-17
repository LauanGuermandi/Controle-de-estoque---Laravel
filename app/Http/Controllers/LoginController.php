<?php

namespace App\Http\Controllers;
use Auth;

class LoginController extends Controller {
	public function login() {
		return view('auth.login');
	}

	public function registro() {
		return view('auth.register');
	}

	public function logout() {
		Auth::logout();
		return redirect()->action('ProdutoController@lista');
	}
}
